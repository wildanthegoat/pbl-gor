<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Models\Lapangan;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function indexhome(){
        $jumlahLapangan = Lapangan::count();
        $jumlahMember = User::where('role', 'user')->count();
        $jumlahPesanan = Pesanan::count();
        return view('admin.home',  compact('jumlahLapangan','jumlahMember','jumlahPesanan'));
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
    

    public function indexpesan(Pesanan $pesanans)
    {
        // Perform the query
        $pesanans = Pesanan::with(['user', 'pembayaran'])->get();

        
        // Debugging to check the fetched data
        // dd($pesanans);
        return view('admin.pesan', compact('pesanans'));

    }

    public function konfirpesanan(Pesanan $pesanan, $id_pesanan){
        $pesanan = Pesanan::find($id_pesanan);
    
        // Logika untuk mengubah status pesanan menjadi 'Dikonfirmasi'
        $pesanan->status = 'Dikonfirmasi';
        $pesanan->save();

        flash()->success('Data Pesanan telah Dikonfirmasi');
        return redirect('/admin/pesanan');
    }

    public function indexadmin(Request $request)
    {
        $users = User::where('role', 'admin')->paginate(10); // Sesuaikan jumlah per halaman sesuai kebutuhan

        return view('admin.admin', compact('users'));
    }

}
