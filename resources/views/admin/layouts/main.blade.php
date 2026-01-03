<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; }
        .sidebar { height: 100vh; background-color: #198754; color: white; position: fixed; width: 16.6%; }
        .sidebar a { color: white; text-decoration: none; display: block; padding: 10px 15px; }
        .sidebar a:hover { background-color: #157347; }
        .content { padding: 20px; margin-left: 16.6%; }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar p-0">
            <h5 class="text-center py-3">ADMIN DESA</h5>
            <a href="/admin/dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a>
            <a href="/admin/profil"><i class="bi bi-building"></i> Profil Desa</a>
            <a href="/admin/berita"><i class="bi bi-newspaper"></i> Berita</a>
            <a href="/admin/pengumuman"><i class="bi bi-megaphone"></i> Pengumuman</a>
            
            <a href="/galeri"><i class="bi bi-images"></i> Galeri</a>
            
            <a href="/admin/kontak"><i class="bi bi-telephone"></i> Kontak</a>
            <hr>
            <form action="{{ route('logout') }}" method="POST" class="px-3">
                @csrf
                <button type="submit" class="btn btn-light btn-sm w-100"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
        </div>
        <div class="col-md-10 content">
            <h4>@yield('page-title')</h4>
            <hr>
            @yield('content') {{-- Ini wajib ada biar isi galerinya muncul --}}
        </div>
    </div>
</div>
</body>
</html>