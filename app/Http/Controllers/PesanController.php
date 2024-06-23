<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Lapangan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class PesanController extends Controller
{
    // Show the booking form
    // public function showBookingForm($id_lapangan)
    // {
    //     $lapangan = Lapangan::find($id_lapangan);
    //     return view('booking_form', compact('lapangan'));
    // }

    // Handle the booking request
    public function store(Request $request)
{
    Log::info('Request Data: ', $request->all());

    // Validasi input
    $request->validate([
        'id_lapangan' => 'required|exists:lapangans,id',
        'tgl_main' => 'required|date|after_or_equal:today|before_or_equal:' . now()->addMonth()->toDateString(),
        'jam_mulai' => 'required|date_format:H:i|after_or_equal:09:00|before_or_equal:22:00',
        'jam_selesai' => 'required|date_format:H:i|after:jam_mulai|before_or_equal:22:00',
    ]);

    // Calculate duration in hours
    $start_time = Carbon::createFromFormat('H:i', $request->jam_mulai);
    $end_time = Carbon::createFromFormat('H:i', $request->jam_selesai);
    $duration = $end_time->diffInHours($start_time);

    Log::info('Duration: ' . $duration);

    // Get the price per hour
    $lapangan = Lapangan::find($request->id_lapangan);
    $price_per_hour = $lapangan->harga;

    Log::info('Price per Hour: ' . $price_per_hour);

    // Calculate the total price
    $total_price = $duration * $price_per_hour;

    Log::info('Total Price: ' . $total_price);

    // Save the order
    $pesanan = new Pesanan();
    $pesanan->id_lapangan = $request->id_lapangan;
    $pesanan->user_id = Auth::id();
    $pesanan->tgl_main = $request->tgl_main;
    $pesanan->jam_mulai = $request->jam_mulai;
    $pesanan->jam_selesai = $request->jam_selesai;
    $pesanan->harga = $total_price;

    $pesanan->save();

    return redirect()->route('lapangan')->with('success', 'Booking berhasil dilakukan.');
}

}
