<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil; 
use App\Models\Berita;

class GuestController extends Controller
{
    public function home()
    {
        // Mengambil 3 berita terbaru untuk ditampilkan di halaman depan
        $beritas = Berita::latest()->take(3)->get();
        return view('welcome', compact('beritas')); 
    }

    public function profil()
    {
        // Mengambil data profil pertama dari database
        $profil = Profil::first(); 
        
        if (!$profil) {
            $profil = (object)[
                'sejarah' => 'Data sejarah belum diisi di Admin.',
                'visi' => 'Visi belum ada.',
                'misi' => 'Misi belum ada.'
            ];
        }
        
        return view('profil', compact('profil')); 
    }

    public function berita()
    {
        // Mengambil semua berita untuk halaman daftar berita
        $beritas = Berita::latest()->get();
        return view('berita', compact('beritas')); 
    }

    public function kontak()
    {
        return view('kontak'); 
    }

    public function pengumuman() 
    { 
        return view('pengumuman'); 
    }

    // INI MODIFIKASI GALERI YANG KAU MINTA
    public function galeri() 
    { 
        // Mengambil data berita yang HANYA punya gambar untuk dijadikan galeri dokumentasi
        // Filter 'whereNotNull' memastikan galeri tidak kosong atau menampilkan gambar rusak
        $galeri = Berita::whereNotNull('gambar')->latest()->get(); 
        
        return view('galeri', compact('galeri')); 
    }
}