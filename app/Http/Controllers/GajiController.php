<?php

namespace App\Http\Controllers;

use id;
use App\Models\Gaji;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GajiController extends Controller
{
    public function index()
    {
        $gajis = Gaji::with('user')->latest()->get();

        return view('admin.gaji.index', compact('gajis'));
    }

    public function create() {
        $users = User::all();

        return view('admin.gaji.create', compact('users'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'bulan' => 'required|string',
            'gaji_pokok' => 'required|numeric',
            'tunjangan' => 'nullable|numeric',
            'potongan' => 'nullable|numeric',
        ],[
            'user_id.required' => 'Pengguna wajib dipilih.',
            'user_id.exists' => 'Pengguna tidak ditemukan.',
            'bulan.required' => 'Bulan wajib diisi.',
            'bulan.string' => 'Bulan harus berupa string.',
            'gaji_pokok.required' => 'Gaji pokok wajib diisi.',
            'gaji_pokok.numeric' => 'Gaji pokok harus berupa angka.',
            'tunjangan.numeric' => 'Tunjangan harus berupa angka.',
            'potongan.numeric' => 'Potongan harus berupa angka.',
        ]
        );

        $data['total_gaji'] = ($data['gaji_pokok'] + ($data['tunjangan'] ?? 0)) - ($data['potongan'] ?? 0);
        $data['status'] = 'Belum Dibayar';

        Gaji::create($data);

        return redirect()->route('gaji')->with('success', 'Gaji berhasil ditambahkan.');
    }

    public function show(Gaji $gaji) {
        return view('admin.gaji.show', compact('gaji'));
    }

    public function bayar($id) {
        // ambil data berdasarkan id
        $gaji = Gaji::findOrFail($id);

        // Periksa apakah gaji tersebut milik pengguna yang sedang login
        if ($gaji->user_id !== Auth::user()->id) {
            // perbarui status menjadi "Lunas"
            $gaji->status = 'Lunas';
            $gaji->save();

        }

        return redirect()->route('gaji')->with('success', 'Gaji berhasil dibayar.');
    }

    public function destroy($id) {
        $gaji = Gaji::findOrFail($id);
        $gaji->delete();
        
        return redirect()->route('gaji')->with('success', 'Gaji berhasil dihapus.');
    }
}
