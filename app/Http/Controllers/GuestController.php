<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Berita;

class GuestController extends Controller
{
    public function home(): View
    {
    
        return view('welcome');
    }

    public function profil(): View
    {
    
        return view('profil');
    }

    public function berita(): View
    {
        $beritas = Berita::latest()->get();
    
        return view('berita', compact('beritas'));
    }

    public function pengumuman(): View
    {
        
        return view('pengumuman');
    }

    public function galeri(): View
    {
       
        return view('galeri');
    }

    public function kontak(): View
    {
        return view('kontak');
    }
}