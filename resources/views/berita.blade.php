@extends('layouts.main')

@section('title', 'Berita Desa Tomok Induk')

@section('content')
<div class="container mt-4">
    <div class="row mb-5 text-center">
        <div class="col-md-12">
            <h1 class="display-5 fw-bold text-success">Kabar Tomok Induk</h1>
            <p class="text-muted">Informasi terbaru seputar kegiatan dan perkembangan desa kita.</p>
            <hr class="mx-auto" style="width: 80px; height: 3px; background-color: #198754; opacity: 1;">
        </div>
    </div>

    <div class="row g-4">
        @forelse($beritas as $item)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 transition-hover">
                    @if($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}"
                             class="card-img-top"
                             style="height: 200px; object-fit: cover;"
                             alt="{{ $item->judul }}">
                    @else
                        <div class="bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                            <span class="text-muted fst-italic">Desa Tomok Induk</span>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-success-subtle text-success border border-success-subtle">Berita</span>
                            <small class="text-muted">{{ $item->created_at->format('d M Y') }}</small>
                        </div>
                        <h5 class="card-title fw-bold text-dark">{{ $item->judul }}</h5>
                        <p class="card-text text-secondary">
                            {{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 110) }}
                        </p>
                    </div>

                    <div class="card-footer bg-transparent border-0 pb-3">
                        <a href="#" class="btn btn-outline-success btn-sm w-100 fw-bold">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <div class="p-5 bg-light rounded-3">
                    <h3 class="text-muted fst-italic">Belum ada berita yang diterbitkan.</h3>
                </div>
            </div>
        @endforelse
    </div>
</div>

<style>
    .transition-hover:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
</style>
@endsection
