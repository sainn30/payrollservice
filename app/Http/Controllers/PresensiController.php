<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    public function index(){
        $presensis = Presensi::where('username', Auth::user()->name)->get();

        return view('presensi.index', compact('presensis'));
    }

    public function indexadmin(){
        $presensis = Presensi::latest()->get();

        return view('presensi.indexadmin', compact('presensis'));
    }

    public function store(Request $request){
        $sudahpresensi = Presensi::where('username', Auth::user()->name)->where('tanggal', date('Y-m-d'))->exists();

        if ($sudahpresensi) {
            return back()->with('error', 'Anda Sudah Melakukan Presensi Hari Ini');
        }

        Presensi::create([
            'username' => Auth::user()->name,
            'tanggal' => date('Y-m-d'),
            'jam_masuk' => now()->setTimezone('Asia/Jakarta')->format('H:i:s'),
        ]);

        return back()->with('success', 'Presensi Berhasil');
    }

    public function presensikeluar(){
        $presensi = Presensi::where('username', Auth::user()->name)->where('tanggal', date('Y-m-d'))->first();

        if (!$presensi) {
            return back()->with('error', 'Anda Belum Melakukan Presensi Hari Ini');
        }

        if ($presensi->jam_keluar) {
            return back()->with('error', 'Anda Sudah Melakukan Presensi Keluar Hari Ini');
        }

        $presensi->update([
            'jam_keluar' => now()->setTimezone('Asia/Jakarta')->format('H:i:s'),
        ]);

        return back()->with('success', 'Presensi Keluar Berhasil');
    }   

    public function destroy(string $id)
    {
        $deletedata = Presensi::findOrFail($id);

        $deletedata->delete();

        return redirect()->route('admin.presensi')->with('success', 'Data Berhasil Dihapus');
    }
}
