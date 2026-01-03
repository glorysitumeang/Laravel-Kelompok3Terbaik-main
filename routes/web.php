<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| AREA UNIVERSAL (Tamu/Warga)
|--------------------------------------------------------------------------
*/
Route::get('/', [GuestController::class, 'home']);
Route::get('/profil', [GuestController::class, 'profil']);
Route::get('/berita', [GuestController::class, 'berita']);
Route::get('/pengumuman', [GuestController::class, 'pengumuman']);
Route::get('/galeri', [GuestController::class, 'galeri']);
Route::get('/kontak', [GuestController::class, 'kontak']);

/*
|--------------------------------------------------------------------------
| AREA ADMIN (Wajib Login)
|--------------------------------------------------------------------------
*/
// Tambahan: Redirect kalau orang cuma ngetik /admin biar gak error 404
Route::get('/admin', function () {
    return redirect()->route('dashboard');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    // Dashboard Utama - Ini kunci biar error di gambar image_92bdab.png hilang!
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Kelola Profil Desa
    Route::get('/profil', [ProfilController::class, 'index'])->name('admin.profil.index');
    Route::post('/profil/update', [ProfilController::class, 'update'])->name('admin.profil.update');
    
    // Kelola Berita (Otomatis dapat route index, create, store, edit, update, destroy)
    Route::resource('/berita', BeritaController::class); 
});

/*
|--------------------------------------------------------------------------
| AREA AKUN (Bawaan Laravel Breeze)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';