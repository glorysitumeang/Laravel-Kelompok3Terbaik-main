<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\ProfileController;

// --- JALUR GUEST / PUBLIC ---
Route::get('/', [GuestController::class, 'home'])->name('home');
Route::get('/profil', [GuestController::class, 'profil'])->name('profil');
Route::get('/berita', [GuestController::class, 'berita'])->name('berita');
Route::get('/pengumuman', [GuestController::class, 'pengumuman'])->name('pengumuman');
Route::get('/galeri', [GuestController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [GuestController::class, 'kontak'])->name('kontak');

// --- JALUR ADMIN (WAJIB LOGIN) ---
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/berita', BeritaController::class)->names('admin.berita');
});

require __DIR__.'/auth.php';
