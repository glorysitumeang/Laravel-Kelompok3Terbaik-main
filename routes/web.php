<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\ProfileController;

// --- INI JALUR WARGA (DI LUAR AUTH) ---
Route::get('/', [GuestController::class, 'home']);
Route::get('/profil', [GuestController::class, 'profil']);
Route::get('/berita', [GuestController::class, 'berita']); 
Route::get('/pengumuman', [GuestController::class, 'pengumuman']);
Route::get('/galeri', [GuestController::class, 'galeri']);
Route::get('/kontak', [GuestController::class, 'kontak']);

// --- INI JALUR ADMIN (WAJIB LOGIN) ---
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/berita', BeritaController::class)->names('admin.berita');
});

require __DIR__.'/auth.php';