<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Lapangan;


class UserController extends Controller
{

    public function indexlapanganuser()
    {
        return view('users.lapangan');
    }
    public function userlapangan(Request $request)
    {
        $user = Auth::user(); 
    
        $users = User::where('role', 'user')->paginate(1); // Sesuaikan jumlah per halaman sesuai kebutuhan
    
        return view('users.lapangan', compact('user', 'users'));
    }

    public function update(Request $request)
    {
        
        $user = Auth::user(); // Ambil data user yang sedang login

    // Validasi data yang dikirimkan
    $request->validate([
        'name' => 'required|string|max:255',
        'jk' => 'required|string|max:15',
        'no_hp' => 'required|numeric',
        'email' => 'required|email|max:255',
        // Validasi lainnya sesuai kebutuhan
    ]);

    // Update data user
   
    $user->name = $request->input('name');
    $user->jk = $request->input('jk');
    $user->no_hp = $request->input('no_hp');
    $user->email = $request->input('email');
    // Update field lainnya sesuai kebutuhan

    $request->user()->save(); // Simpan perubahan
    
    flash()->success('Profil berhasil diperbarui');

    return redirect()->back();
    }

    public function lapangan()
    {
    $lapangans = Lapangan::all(); // Mengambil semua data lapangan dari database

    return view('users.lapangan', compact('lapangans')); // Mengirim data lapangan ke view
    }   

    
}
