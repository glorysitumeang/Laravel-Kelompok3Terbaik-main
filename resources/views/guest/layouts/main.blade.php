<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Website Desa')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS (opsional) -->
    <style>
        body {
            padding-top: 70px;
        }
        footer {
            background-color: #f8f9fa;
            padding: 15px 0;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/"><B>DESA TOMOK INDUK</B></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/profil">Profil Desa</a></li>
                <li class="nav-item"><a class="nav-link" href="/berita">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="/pengumuman">Pengumuman</a></li>
                <li class="nav-item"><a class="nav-link" href="/galeri">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="/kontak">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container">
    @yield('content')
</div>

<!-- FOOTER -->
<footer class="text-center">
    <div class="container">
        <p class="mb-0">
            © {{ date('Y') }} Website Desa | Dibuat oleh Kelompok tukimin
        </p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
