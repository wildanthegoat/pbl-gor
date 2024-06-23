<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;
use App\Models\User;

class AdminController extends Controller
{
    public function indexhome(){
        $jumlahLapangan = Lapangan::count();
        $jumlahMember = User::where('role', 'user')->count();
        return view('admin.home',  compact('jumlahLapangan','jumlahMember'));
    }
        
    public function indexmember(Request $request)
    {
        $users = User::where('role', 'user')->paginate(10); // Sesuaikan jumlah per halaman sesuai kebutuhan

        return view('admin.member', compact('users'));
    }
            
    public function indexlapangan(Request $request)
    {
        $lapangans = Lapangan::all();
        return view('admin.lapangan', compact('lapangans'));
             
    }
    

    public function indexpesan(){
        return view('admin.pesan');
    }


    public function indexadmin(Request $request)
    {
        $users = User::where('role', 'admin')->paginate(10); // Sesuaikan jumlah per halaman sesuai kebutuhan

        return view('admin.admin', compact('users'));
    }

    




}
