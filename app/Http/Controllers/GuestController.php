<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class GuestController extends Controller
{
    public function home()
    {
    
        return view('welcome');
    }

    public function profil()
    {
        return view('profil');
    }

    public function berita()
    {
        $beritas = Berita::latest()->get();
        return view('berita', compact('beritas'));
    }

    public function pengumuman()
    {
        return view('pengumuman');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function kontak()
    {
        return view('kontak');
    }
}