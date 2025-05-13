<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Gaji;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $gajis = Gaji::where('user_id', Auth::user()->id)->latest()->get();

        return view('dashboard', compact('gajis'));
    }

    public function exportPdf()
    {
        // Ambil data gaji user yang sedang login
        $gajis = Gaji::where('user_id', Auth::user()->id)->latest()->get();

        // Load view untuk PDF
        $pdf = Pdf::loadView('exports.gajipdf', compact('gajis'));

        // Download PDF
        return $pdf->download('riwayat-gaji.pdf');
    }
}
