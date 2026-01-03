<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil; // Wajib ada ini biar dia kenal tabel profil_desa
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        // Ambil data pertama dari database
        $profil = Profil::first();
        return view('admin.profil.index', compact('profil'));
    }

    public function update(Request $request)
    {
        // Cari data pertama, kalau gak ada buat baru
        $profil = Profil::first() ?: new Profil;

        // INI YANG BIKIN ERROR TADI: Kita kasih judulnya otomatis
        $profil->judul = "Profil Desa Tomok Induk";
        
        // Ambil data dari inputan form Admin kau
        $profil->sejarah = $request->sejarah;
        $profil->visi = $request->visi;
        $profil->misi = $request->misi;

        $profil->save(); // Simpan ke database

        return redirect()->back()->with('success', 'Data Profil Berhasil Diperbarui!');
    }
}