@extends('layouts.main')

@section('content')
<div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-2xl font-bold mb-6 text-center">Berita Desa Tomok Induk</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse($beritas as $item)
                <div class="border rounded p-4 shadow-sm">
                    <h3 class="font-bold">{{ $item->judul }}</h3>
                    <p class="text-sm text-gray-600">{{ Str::limit(strip_tags($item->isi), 100) }}</p>
                </div>
            @empty
                <p class="text-center col-span-3">Belum ada berita.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection