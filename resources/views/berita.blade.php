<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Berita Desa Tomok Induk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-2xl font-bold mb-6 text-center text-blue-800">Kabar Terbaru Desa Tomok Induk</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @forelse($beritas as $item)
                        <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition bg-white">
                            {{-- Area Gambar --}}
                            <div class="w-full h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                                @if($item->gambar)
                                    {{-- Ini jalur sakti biar fotonya muncul --}}
                                    <img src="{{ asset('storage/' . $item->gambar) }}" 
                                         class="w-full h-48 object-cover" 
                                         alt="{{ $item->judul }}"
                                         onerror="this.src='https://via.placeholder.com/400x200?text=Foto+Proses+Upload'">
                                @else
                                    <span class="text-gray-400 text-xs italic">Tanpa Gambar</span>
                                @endif
                            </div>
                            
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2 text-gray-800">{{ $item->judul }}</h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    {{ Str::limit(strip_tags($item->isi), 90) }}
                                </p>
                                <div class="flex justify-between items-center border-t pt-3">
                                    <span class="text-xs text-blue-500 font-medium">{{ $item->created_at->format('d M Y') }}</span>
                                    <button class="text-xs bg-blue-50 text-blue-600 px-2 py-1 rounded">Detail</button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-3 text-center py-20 bg-gray-50 rounded-xl">
                            <p class="text-gray-500 italic">Belum ada berita yang diunggah.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>