@extends('admin.layouts.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Berita Tomok Induk</h1>
    <div class="card mb-4">
        <div class="card-body">
            {{-- WAJIB: Tambahkan enctype="multipart/form-data" supaya file gambar bisa terkirim --}}
            <form action="/admin/berita" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Judul Berita</label>
                    <input type="text" name="judul" class="form-control" placeholder="Masukkan judul berita..." required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Isi Berita</label>
                    <textarea name="isi" class="form-control" rows="5" placeholder="Tuliskan berita lengkap di sini..." required></textarea>
                </div>

                {{-- Tambahan Input Gambar --}}
                <div class="mb-3">
                    <label class="form-label">Foto/Gambar Berita</label>
                    <input type="file" name="gambar" class="form-control" accept="image/*">
                    <div class="form-text text-muted">Format: JPG, PNG, JPEG. Maksimal 2MB.</div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Simpan Sekarang</button>
                    <a href="/admin/berita" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection