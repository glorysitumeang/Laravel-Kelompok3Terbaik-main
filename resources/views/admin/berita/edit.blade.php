@extends('admin.layouts.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Berita</h1>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('berita.update', $berita->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Judul Berita</label>
                    <input type="text" name="judul" class="form-control" value="{{ $berita->judul }}" required>
                </div>
                <div class="mb-3">
                    <label>Isi Berita</label>
                    <textarea name="isi" class="form-control" rows="5" required>{{ $berita->isi }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('berita.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection