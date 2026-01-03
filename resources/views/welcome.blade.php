<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Resmi Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        :root { --hijau-desa: #198754; }
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        
        /* Hero Section */
        .hero { 
            background: linear-gradient(rgba(25, 135, 84, 0.9), rgba(25, 135, 84, 0.9)), 
                        url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            padding: 100px 0;
            color: white;
            border-radius: 0 0 50px 50px;
        }

        /* Card Style */
        .feature-card {
            border: none;
            border-radius: 15px;
            transition: 0.3s;
            background: white;
        }
        .feature-card:hover { transform: translateY(-10px); box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .icon-box {
            width: 60px;
            height: 60px;
            background: var(--hijau-desa);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .btn-desa { background-color: var(--hijau-desa); color: white; border-radius: 10px; }
        .btn-desa:hover { background-color: #157347; color: white; }
    </style>
</head>
<body>

    <header class="hero text-center shadow">
        <div class="container">
            <h1 class="display-4 fw-bold">Website Resmi Desa Tercinta</h1>
            <p class="lead">Media informasi resmi Desa untuk profil, berita, pengumuman, dan kegiatan desa secara transparan.</p>
            <a href="/admin/dashboard" class="btn btn-light btn-lg px-5 mt-3 shadow-sm text-success fw-bold">Profil Desa</a>
        </div>
    </header>

    <div class="container mt-5">
        <div class="row align-items-center mb-5 pb-5">
            <div class="col-md-6">
                <h2 class="fw-bold text-success mb-3">Sekilas Tentang Desa</h2>
                <p class="text-muted" style="text-align: justify;">
                    Desa merupakan unit pemerintahan terkecil yang memiliki peran penting dalam pelayanan masyarakat. 
                    Website ini bertujuan untuk memberikan informasi terkait profil desa, visi misi, serta struktur organisasi secara terbuka kepada masyarakat.
                </p>
                <a href="#" class="btn btn-desa px-4">Baca Selengkapnya</a>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <img src="https://images.unsplash.com/photo-1566433316223-3eb5769733bd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="img-fluid rounded-4 shadow" alt="Foto Desa">
            </div>
        </div>

        <h3 class="text-center fw-bold mb-4">Informasi Desa</h3>
        <div class="row g-4 mb-5">
            <div class="col-md-4 text-center">
                <div class="card feature-card p-4 h-100 shadow-sm">
                    <div class="icon-box mx-auto"><i class="bi bi-newspaper fs-3"></i></div>
                    <h5 class="fw-bold">Berita Desa</h5>
                    <p class="text-muted small">Informasi terbaru mengenai kegiatan dan perkembangan yang terjadi di lingkungan Desa.</p>
                    <a href="/admin/berita" class="btn btn-outline-success btn-sm mt-auto">Lihat Berita</a>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card feature-card p-4 h-100 shadow-sm">
                    <div class="icon-box mx-auto"><i class="bi bi-megaphone fs-3"></i></div>
                    <h5 class="fw-bold">Pengumuman</h5>
                    <p class="text-muted small">Pengumuman resmi Desa yang dapat diakses dan diunduh oleh masyarakat umum.</p>
                    <a href="/admin/pengumuman" class="btn btn-outline-success btn-sm mt-auto">Lihat Pengumuman</a>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card feature-card p-4 h-100 shadow-sm">
                    <div class="icon-box mx-auto"><i class="bi bi-images fs-3"></i></div>
                    <h5 class="fw-bold">Galeri Kegiatan</h5>
                    <p class="text-muted small">Dokumentasi kegiatan dan event yang diselenggarakan oleh Pemerintah Desa.</p>
                    <a href="/galeri" class="btn btn-outline-success btn-sm mt-auto">Lihat Galeri</a>
                </div>
            </div>
        </div>

        <div class="bg-white p-5 rounded-4 shadow-sm mb-5">
            <h2 class="fw-bold text-success border-bottom pb-2 mb-4">Visi & Misi Desa</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="fw-bold">Visi</h5>
                    <p class="text-muted italic">"Mewujudkan Desa yang maju, mandiri, dan sejahtera melalui pelayanan publik yang transparan."</p>
                </div>
                <div class="col-md-6">
                    <h5 class="fw-bold">Misi</h5>
                    <ul class="text-muted small">
                        <li>Meningkatkan kualitas pelayanan kepada masyarakat.</li>
                        <li>Mendorong pembangunan desa yang berkelanjutan.</li>
                        <li>Meningkatkan partisipasi masyarakat dalam pembangunan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0 small opacity-75">&copy; 2026 Pemerintah Desa Tercinta. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>