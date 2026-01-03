<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profil Desa Tomok Induk') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 md:p-12">
                
                {{-- Header --}}
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-extrabold text-gray-900">Profil Desa Tomok Induk</h1>
                    <p class="text-lg text-gray-600 mt-4">Mengenal lebih dekat sejarah, visi, dan misi desa kami.</p>
                    <div class="mt-6 mx-auto w-32 h-1.5 bg-blue-600 rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div class="md:col-span-2 space-y-10">
                        {{-- Sejarah --}}
                        <section>
                            <h3 class="text-2xl font-bold text-blue-700 mb-4 border-b-2 border-blue-100 pb-2">Sejarah Desa</h3>
                            <div class="text-gray-700 leading-relaxed text-justify text-lg">
                                {{-- nl2br supaya enter di admin jadi baris baru di sini --}}
                                {!! nl2br(e($profil->sejarah ?? 'Data sejarah belum diisi di Admin.')) !!}
                            </div>
                        </section>

                        {{-- Visi Misi --}}
                        <section class="bg-blue-50 p-8 rounded-2xl border-l-8 border-blue-600">
                            <h3 class="text-2xl font-bold text-blue-800 mb-6">Visi & Misi</h3>
                            <div class="mb-6">
                                <h4 class="font-bold text-gray-900 text-lg underline decoration-blue-500">Visi:</h4>
                                <p class="italic text-gray-800 text-xl mt-2">
                                    "{{ $profil->visi ?? 'Visi belum diisi.' }}"
                                </p>
                            </div>
                            
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg underline decoration-blue-500">Misi:</h4>
                                <div class="mt-2 text-gray-700 prose max-w-none">
                                    {!! $profil->misi ?? 'Misi belum diisi.' !!}
                                </div>
                            </div>
                        </section>
                    </div>

                    {{-- Sidebar --}}
                    <div class="space-y-8">
                        <div class="bg-blue-600 text-white p-6 rounded-2xl shadow-lg">
                            <h3 class="text-xl font-bold mb-4">Info Singkat</h3>
                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between border-b border-blue-400 pb-1">
                                    <span>Luas Wilayah</span>
                                    <span class="font-bold">150 Ha</span>
                                </div>
                                <div class="flex justify-between border-b border-blue-400 pb-1">
                                    <span>Populasi</span>
                                    <span class="font-bold">2.500 Jiwa</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Kecamatan</span>
                                    <span class="font-bold">Simanindo</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-2xl border border-gray-200 text-center shadow-md">
                            <h3 class="font-bold text-gray-800 mb-4 uppercase">Kepala Desa</h3>
                            <img src="https://via.placeholder.com/150" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4 border-blue-50 shadow-sm" alt="Foto Kades">
                            <h4 class="font-bold text-gray-900 text-lg">Nama Kepala Desa</h4>
                            <p class="text-sm text-blue-600 font-medium">Periode 2021 - 2027</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>