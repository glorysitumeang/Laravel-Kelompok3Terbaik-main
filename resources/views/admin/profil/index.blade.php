@extends('admin.layouts.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Profil Desa Tomok Induk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Profil Desa</li>
    </ol>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- INI FORM NYA COK, JANGAN DIHAPUS ACTIONNYA --}}
    <form action="{{ route('admin.profil.update') }}" method="POST">
        @csrf

        <div class="card mb-4 shadow">
            <div class="card-header bg-primary text-white">
                <i class="fas fa-edit me-1"></i>
                Kelola Sejarah Desa
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="sejarah" class="form-label font-weight-bold">Teks Sejarah Desa:</label>
                    <textarea class="form-control" id="sejarah" name="sejarah" rows="10" placeholder="Ketik sejarah panjang kau di sini...">{{ $profil->sejarah ?? '' }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-success text-white">
                        <i class="fas fa-eye me-1"></i>
                        Visi Desa
                    </div>
                    <div class="card-body">
                        <textarea class="form-control" name="visi" rows="4" placeholder="Ketik visi desa...">{{ $profil->visi ?? '' }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-info text-white">
                        <i class="fas fa-bullseye me-1"></i>
                        Misi Desa (Gunakan format HTML/Bullet)
                    </div>
                    <div class="card-body">
                        <textarea class="form-control" name="misi" rows="4" placeholder="Contoh: <ul><li>Misi 1</li></ul>">{{ $profil->misi ?? '' }}</textarea>
                        <small class="text-muted">Gunakan tag &lt;ul&gt;&lt;li&gt; supaya muncul bullet point di depan.</small>
                    </div>
                </div>
            </div>
        </div>

        {{-- TOMBOL SAKTI --}}
        <div class="text-end mb-5">
            <button type="submit" class="btn btn-primary btn-lg px-5 shadow-sm">
                <i class="fas fa-save me-2"></i> SIMPAN PERUBAHAN PROFIL
            </button>
        </div>
    </form>
</div>
@endsection