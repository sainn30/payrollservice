<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gaji;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserloginController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('admin.userlogin', compact('users'));
    }

    public function destroy(string $id)
{
    $user = User::findOrFail($id);

    // Hapus gajis user dulu
    Gaji::where('user_id', $user->id)->delete();

    // Baru hapus user
    $user->delete();

    return redirect()->route('admin.userlogin')->with('success', 'Data User Berhasil Dihapus');
}

    
}
