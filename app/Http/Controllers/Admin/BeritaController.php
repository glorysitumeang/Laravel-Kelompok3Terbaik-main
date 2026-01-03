<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage; // Penting untuk urusan hapus file

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get(); // Pakai latest biar yang baru diisi muncul paling atas
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048', // Validasi foto
        ]);

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
        ];

        // Logika simpan gambar
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        Berita::create($data);

        return redirect('/admin/berita')->with('success', 'Berita Berhasil Ditambah!');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $berita = Berita::findOrFail($id);
        
        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
        ];

        // Jika ada upload gambar baru saat edit
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama dari storage biar gak nyampah
            if ($berita->gambar) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        $berita->update($data);

        return redirect('/admin/berita')->with('success', 'Berita Berhasil Diperbarui!');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        
        // Hapus file gambarnya juga dari folder storage
        if ($berita->gambar) {
            Storage::disk('public')->delete($berita->gambar);
        }
        
        $berita->delete();

        return redirect('/admin/berita')->with('success', 'Berita Berhasil Dihapus!');
    }
}