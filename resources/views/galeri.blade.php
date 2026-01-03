@extends('admin.layouts.main')

@section('page-title', 'Galeri Dokumentasi Desa')

@section('content')
<div class="row">
@php
    $path = public_path('storage/berita');
    $files = file_exists($path) ? scandir($path) : [];
@endphp

@forelse($files as $file)
    @if(in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg','jpeg','png']))
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('storage/berita/' . $file) }}"
                     class="card-img-top"
                     style="height:200px;object-fit:cover">
                <div class="card-body">
                    <p class="text-muted small mb-0">{{ $file }}</p>
                </div>
            </div>
        </div>
    @endif
@empty
    <div class="col-12 text-center py-5">
        <div class="alert alert-light">
            Belum ada foto
        </div>
    </div>
@endforelse
</div>
@endsection
