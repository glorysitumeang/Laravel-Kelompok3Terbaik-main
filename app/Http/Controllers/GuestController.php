<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Berita;

class GuestController extends Controller
{
    public function home(): View
    {
        return view('guest.home');
    }

    public function profil(): View
    {
        return view('guest.profil');
    }

    public function berita(): View
    {
        // ambil data berita (kalau ada)
        $beritas = Berita::latest()->get();

        return view('guest.berita', compact('beritas'));
    }

    public function pengumuman(): View
    {
        return view('guest.pengumuman');
    }

    public function galeri(): View
    {
        return view('guest.galeri');
    }

    public function kontak(): View
    {
        return view('guest.kontak');
    }
}
