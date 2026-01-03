@extends('guest.layouts.main')

@section('title', 'Kontak Desa')

@section('content')

<!-- HEADER -->
<div class="text-center mb-5">
    <h1 class="fw-bold text-success">Hubungi Kami</h1>
    <p class="text-muted">
        Informasi resmi kontak Desa untuk keperluan masyarakat
    </p>
</div>

<!-- KONTAK UTAMA -->
<div class="row g-4">
    <!-- ALAMAT -->
    <div class="col-md-4">
        <div class="card shadow h-100 border-0">
            <div class="card-body text-center">
                <div class="mb-3">
                    <i class="bi bi-geo-alt-fill text-success" style="font-size: 3rem;"></i>
                </div>
                <h5 class="fw-bold">Alamat Kantor Desa</h5>
                <p class="text-muted">
                    {{ $kontak->alamat ?? 'Tomok, JL.Sosor Tolong' }}
                </p>
            </div>
        </div>
    </div>

    <!-- TELEPON -->
    <div class="col-md-4">
        <div class="card shadow h-100 border-0">
            <div class="card-body text-center">
                <div class="mb-3">
                    <i class="bi bi-telephone-fill text-success" style="font-size: 3rem;"></i>
                </div>
                <h5 class="fw-bold">Telepon</h5>
                <p class="text-muted">
                    {{ $kontak->telepon ?? '(021) 12345678' }}
                </p>
            </div>
        </div>
    </div>

    <!-- EMAIL -->
    <div class="col-md-4">
        <div class="card shadow h-100 border-0">
            <div class="card-body text-center">
                <div class="mb-3">
                    <i class="bi bi-envelope-fill text-success" style="font-size: 3rem;"></i>
                </div>
                <h5 class="fw-bold">Email Resmi</h5>
                <p class="text-muted">
                    {{ $kontak->email ?? 'desa@contoh.go.id' }}
                </p>
            </div>
        </div>
    </div>
</div>

<!-- MAP & INFO TAMBAHAN -->
<div class="row mt-5">
    <!-- MAP -->
    <div class="col-md-7 mb-4">
        <div class="card shadow border-0">
            <div class="card-body p-0">
                <iframe
                    src="https://share.google/T3OnYOHMYecwuGfMf"
                    width="100%"
                    height="350"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>

    <!-- JAM OPERASIONAL -->
    <div class="col-md-5">
        <div class="card shadow border-0 h-100">
            <div class="card-body">
                <h5 class="fw-bold text-success mb-3">Jam Pelayanan</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Senin – Jumat : 08.00 – 15.00</li>
                    <li class="list-group-item">Sabtu : 08.00 – 12.00</li>
                    <li class="list-group-item">Minggu & Libur Nasional : Tutup</li>
                </ul>

                <div class="alert alert-success mt-4 mb-0">
                    Untuk keperluan mendesak, silakan menghubungi nomor telepon yang tersedia.
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
