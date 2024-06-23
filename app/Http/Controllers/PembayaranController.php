<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function showPembayaran()
    {
        // Ambil data pembayaran yang terkait dengan pesanan dan lapangan
        $pembayarans = Pembayaran::with('pesanan.lapangan')->paginate(10);
        
        // Kirim data ke view bayar.blade.php
        return view('users.bayar', compact('pembayarans'));
    }

    public function handlePembayaran(Request $request)
    {
        // Logika untuk menangani pembayaran (misalnya, mengubah status pembayaran)
    }
}
