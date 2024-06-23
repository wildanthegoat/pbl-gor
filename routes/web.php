<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\User;

// Route::middleware(['auth', 'role:user'])->group(function () {
    
    // Route::get('/bayar', function () {
    //     return view('users.bayar');
    // })->name('user.bayar');
    Route::get('/jadwal', function () {
        return view('users.jadwal');
    })->name('user.jadwal');
// });

Route::get('/', function () {
    return view('users.home');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/home', [AdminController::class, 'indexhome']);
    Route::get('/admin/member', [AdminController::class, 'indexmember']);
    Route::get('/admin/admin', [AdminController::class, 'indexadmin']);

    Route::get('/admin/lapangan', [AdminController::class, 'indexlapangan']);
    Route::post('/admin/lapangan', [LapanganController::class, 'store'])->name('admin.lapangan.store');
    Route::put('/admin/lapangan/{id_lapangan}', [LapanganController::class, 'update'])->name('admin.lapangan.update');
    
    // Route::get('/booking/{id_lapangan}', [PesanController::class, 'showBookingForm'])->name('pesan.form');
    Route::post('/lapangan', [PesanController::class, 'store'])->name('pesan.store');

    Route::get('/admin/pesanan', function () {
        return view('admin.pesan');
    })->name('admin.pesan');
    
    });
    
    Route::get('/lapangan', [UserController::class, 'userlapangan']);
    Route::put('/lapangan', [UserController::class, 'update'])->name('users.update');
    ROute::get('/lapangan', [UserController::class, 'lapangan']);

    Route::get('/bayar', [PembayaranController::class, 'showPembayaran'])->name('bayar');
    Route::post('/pembayaran', [PembayaranController::class, 'handlePembayaran'])->name('pembayaran.handle');

// Route::get('/register', [AuthenticatedSessionController::class, 'store'])->name('lapangan');


// Route::get('/lapangan', function () {
//     return view('users.lapangan');
// })->name('user.lapangan');

// Route::get('/lapangan', function () {
//     return view('users.lapangan');
// });
// ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

