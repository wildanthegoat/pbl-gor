<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LapanganController;

// Route::middleware(['auth', 'role:user'])->group(function () {
    
    Route::get('/bayar', function () {
        return view('users.bayar');
    })->name('user.bayar');
    Route::get('/jadwal', function () {
        return view('users.jadwal');
    })->name('user.jadwal');
// });
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('users.home');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/home', [LoginController::class, 'index']);

    Route::get('/admin/member', function () {
        return view('admin.member');
    })->name('admin.member');

    Route::get('/admin/lapangan', [LapanganController::class, 'index'])->name('admin.lapangan.index');
    Route::post('/admin/lapangan', [LapanganController::class, 'store'])->name('admin.lapangan.store');
    Route::put('/admin/lapangan/{id}', [LapanganController::class, 'update'])->name('admin.lapangan.update');

    Route::get('/admin/pesanan', function () {
        return view('admin.pesan');
    })->name('admin.pesan');

    Route::get('/admin/admin', function () {
        return view('admin.admin');
    })->name('admin.admin');
});
Route::get('/lapangan', function () {
    return view('users.lapangan');
})->name('user.lapangan');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

