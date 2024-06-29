<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PembayaranController extends Controller
{
    public function showPembayaran()
    {
        
        // Ambil data pembayaran yang terkait dengan pesanan dan lapangan
        // $pesanan = Pesanan::with('pesanan.lapangan')->paginate(10);
        
        $userId = Auth::id();
        $pesanans = Pesanan::where('id_user', $userId)->get();
        

        // Ambil pesanan berdasarkan id

        // Kirim data ke view bayar.blade.php
        return view('users.bayar', compact('pesanans'));
    }

    public function store(Request $request, $id_pesanan)
    {
        // Debugging: cek data yang dikirim dari form
        Log::info('ID Pesanan yang diterima: ' . $id_pesanan);
        Log::info('Request Data: ', $request->all());
    
        // Validasi input
        $request->validate([
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Ambil pesanan berdasarkan id
        $pesanan = Pesanan::find($id_pesanan);
        $id_pesanan = $request->input('id_pesanan');
        // $pesanan = Pesanan::where('id_pesanan', $id_pesanan)->firstOrFail();
    
       
    
        // Proses upload bukti pembayaran
        if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('bukti'), $filename);
    
            // Simpan data pembayaran ke tabel pembayaran
            Pembayaran::create([
                'id_pesanan' => $pesanan->id_pesanan,
                'status_pembayaran' => 'dibayar',
                'bukti_pembayaran' => $filename,
            ]);
    
            // Update status pembayaran di pesanan
            $pesanan->status = 'dibayar';
            $pesanan->save();
    
            // Redirect atau response sesuai kebutuhan
            flash()->success('Bukti pembayaran berhasil diunggah');

            return redirect()->back();
        }
    
        flash()->error('Gagal mengunggah bukti pembayaran');
        return redirect()->back();
    }
    
}
