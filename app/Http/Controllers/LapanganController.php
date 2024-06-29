<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class LapanganController extends Controller
{
    public function index(Request $request)
    {
        $lapangans = Lapangan::all();
        return view('admin.lapangan', compact('lapangans'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'nama_lapangan' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'keterangan' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the new lapangan data
        $lapangan = new Lapangan;
        $lapangan->id_user = Auth::id();
        $lapangan->nama_lapangan = $request->nama_lapangan;
        $lapangan->harga = $request->harga;
        $lapangan->keterangan = $request->keterangan;
        $lapangan->tanggal = now();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $lapangan->foto = $filename;
        }

        $lapangan->save();

        flash()->success('Data Lapangan Berhasil ditambahkan');
        return redirect('/admin/lapangan');
    }

    
    public function update(Request $request, $id)
    {
        // Validasi data yang diperbarui
        $request->validate([
            'nama_lapangan' => 'required|string',
            'harga' => 'required|numeric',
            'keterangan' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:100',
        ]);

        // Ambil data lapangan yang akan diperbarui
        $lapangan = Lapangan::where('id_lapangan', $id)->firstOrFail();


        // Update data lapangan
        $lapangan->id_user = Auth::id();
        $lapangan->nama_lapangan = $request->input('nama_lapangan');
        $lapangan->harga = $request->input('harga');
        $lapangan->keterangan = $request->input('keterangan');
        $lapangan->tanggal = now();


        // Cek apakah ada file foto yang diunggah
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($lapangan->foto) {
                Storage::delete($lapangan->foto);
            }
            
            // Simpan foto baru
            $fotoPath = $request->file('foto')->store('images');
            $lapangan->foto = $fotoPath;
        }

        // Simpan perubahan
        $lapangan->save();

        flash()->success('Data Lapangan Berhasil diperbarui');
        return redirect('/admin/lapangan')->with('success', 'Data lapangan berhasil diperbarui.');
    }
}