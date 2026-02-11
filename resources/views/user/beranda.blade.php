<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SMK Nasional Nganjuk</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/logobaru.png') }}" rel="icon">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <style>
        :root {
            --primary-red: #b72b3f;
            --dark-red: #8a1f2e;
        }

        h1, h2, h3, h4, h5, h6, .sitename {
            font-family: 'Outfit', sans-serif;
        }

        /* Sambutan Section Improvements */
        .sambutan-wrapper {
            position: relative;
            padding: 40px 0;
        }

        .sambutan-photo-container {
            position: relative;
            z-index: 2;
        }

        .photo-artistic-frame {
            position: relative;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            height: 500px;
        }

        .photo-artistic-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
            transition: transform 0.6s ease;
        }

        .sambutan-photo-container:hover .photo-artistic-frame img {
            transform: scale(1.05);
        }

        .photo-backdrop {
            position: absolute;
            top: 40px;
            left: -40px;
            width: 100%;
            height: 100%;
            background: #fdf2f3;
            border-radius: 30px;
            z-index: -1;
        }

        .fancy-quote-card {
            background: white;
            border-radius: 30px;
            padding: 40px;
            box-shadow: 0 15px 45px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.02);
        }

        .quote-icon-circle {
            width: 60px;
            height: 60px;
            background: #fdf2f3;
            color: var(--primary-red);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 25px;
        }

        .sambutan-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #2b2b2b;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .sambutan-text {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        /* Ekstra Section Improvements */
        .ekstra-card {
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.4s ease;
            height: 100%;
            border: none;
        }

        .ekstra-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(183, 43, 63, 0.1);
        }

        .ekstra-img-container {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .ekstra-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .ekstra-card:hover .ekstra-img {
            transform: scale(1.1);
        }

        .ekstra-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
            opacity: 0;
            transition: opacity 0.4s ease;
            display: flex;
            align-items: flex-end;
            padding: 20px;
        }

        .ekstra-card:hover .ekstra-overlay {
            opacity: 1;
        }

        .ekstra-content {
            padding: 25px;
        }

        .ekstra-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 12px;
        }

        .ekstra-desc {
            font-size: 0.95rem;
            color: #777;
            line-height: 1.6;
            margin-bottom: 0;
        }

        @media (max-width: 991px) {
            .photo-backdrop { display: none; }
            .sambutan-title { font-size: 2rem; }
            .photo-artistic-frame { height: 400px; }
        }

        /* Modal Premium Styling */
        .modal-content {
            border-radius: 30px;
            border: none;
            box-shadow: 0 25px 50px rgba(0,0,0,0.2);
        }

        .modal-header {
            background: #fdf2f3;
            border-bottom: 1px solid #fee2e4;
            border-radius: 30px 30px 0 0;
            padding: 25px 35px;
        }

        .modal-title {
            font-weight: 800;
            color: #2b2b2b;
            font-size: 1.5rem;
        }

        .modal-body {
            padding: 40px 35px;
            font-size: 1.1rem;
            line-height: 1.8;
            color: #444;
        }

        .modal-footer {
            border-top: 1px solid #f1f1f1;
            padding: 20px 35px;
            background: #fafafa;
            border-radius: 0 0 30px 30px;
        }
    </style>

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="{{ asset('assets/logobaru.png') }}" alt="Logo SMK Nasional Nganjuk"
                    style="height: 60px; width: auto; margin-right: 12px;">
                <h1 class="sitename m-0 fs-4">SMK Nasional Nganjuk</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <a href="{{ route('beranda') }}" class="active">Beranda</a>
                    <li class="dropdown"><a href="#"><span>Profile</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <!-- Contoh tombol setelah diubah -->
                            <a href="{{ route('visi-misi') }}">Visi & Misi</a>
                            <a href="{{ route('sejarah-sekolah') }}">Sejarah Sekolah</a>
                            <a href="{{ route('data-jurusan') }}">Data Jurusan</a>
                            <a href="{{ route('data-fasilitas') }}">Fasilitas</a>
                        </ul>
                    </li>
                    <a href="{{ route('data-struktur-organisasi') }}">Struktur Organisasi</a>
                    <a href="{{ route('data-bkk') }}">BKK</a>
                    <li class="dropdown"><a href="#"><span>Data Kepegawaian</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <a href="{{ route('data-kepala-sekolah') }}">Data Kepala Sekolah</a>
                            <a href="{{ route('data-guru') }}">Data Guru</a>
                        </ul>
                    </li>
                    <a href="{{ route('data-pbdb') }}">PPDB</a>
                    <a href="{{ route('lokasi') }}">Lokasi</a>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section class="hero-section position-relative d-flex align-items-center justify-content-center" style="min-height:80vh; background: url('{{ asset('assets/foto sekolah.jpg') }}') center center/cover no-repeat;">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.55);"></div>
            <div class="container position-relative z-2">
                <div class="row justify-content-center align-items-center" style="min-height:70vh;">
                    <div class="col-lg-10 text-center text-white">
                        <h1 class="display-2 fw-bold mb-3 text-white" style="line-height:1.1;">Selamat Datang di <br>SMK Nasional Nganjuk</h1>
                        <p class="lead mb-4 fs-4 text-white">Membangun Generasi Unggul, Berkarakter, dan Berprestasi</p>
                        <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                            <a href="{{ route('sejarah-sekolah') }}" class="btn btn-primary btn-lg px-5 text-white">Tentang Kami</a>
                            <a href="#kontak" class="btn btn-outline-light btn-lg px-5 text-white">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="sambutan-kepala-sekolah" class="py-5 bg-white overflow-hidden">
            <div class="container">
                <div class="row align-items-center gy-5">
                    <!-- Photo Column -->
                    <div class="col-lg-5" data-aos="fade-right">
                        <div class="sambutan-photo-container">
                            <div class="photo-backdrop"></div>
                            <div class="photo-artistic-frame">
                                @if ($kepala && $kepala->foto)
                                    <img src="{{ asset('storage/' . $kepala->foto) }}" alt="{{ $kepala->nama }}">
                                @else
                                    <img src="{{ asset('assets/img/person/default.jpg') }}" alt="Default Foto">
                                @endif
                                <div class="position-absolute bottom-0 start-0 w-100 p-4 text-white" 
                                     style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                                    <h5 class="fw-bold mb-0 text-white">{{ $kepala->nama ?? '-' }}</h5>
                                    <p class="mb-0 small opacity-75">Kepala SMK Nasional Nganjuk</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="col-lg-7 ps-lg-5" data-aos="fade-left">
                        <div class="fancy-quote-card">
                            <div class="quote-icon-circle">
                                <i class="bi bi-quote"></i>
                            </div>
                            <h2 class="sambutan-title">Sambutan <br><span class="text-danger">Kepala Sekolah</span></h2>
                            
                            <div class="sambutan-text text-justify">
                                @if ($kepala)
                                    <p class="fw-bold text-dark mb-3">Assalamu'alaikum Warahmatullahi Wabarakatuh,</p>
                                    <p>{{ Str::limit(strip_tags($kepala->sambutan), 350) }}</p>
                                    <p class="fw-bold text-dark mt-3">Wassalamu'alaikum Warahmatullahi Wabarakatuh.</p>
                                @else
                                    <p>Mohon maaf, pesan sambutan kepala sekolah sedang dalam pembaruan.</p>
                                @endif
                            </div>

                            <div class="pt-4 border-top d-flex gap-2">
                                <button type="button" class="btn btn-danger rounded-pill px-4 py-2 fw-bold transition-all shadow-sm" data-bs-toggle="modal" data-bs-target="#modalSambutan">
                                    Baca Sambutan <i class="bi bi-chat-left-quote ms-2"></i>
                                </button>
                                <a href="{{ route('data-kepala-sekolah') }}" class="btn btn-outline-danger rounded-pill px-4 py-2 fw-bold transition-all">
                                    Profil Lengkap <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if($kepala)
        <!-- Modal Sambutan -->
        <div class="modal fade" id="modalSambutan" tabindex="-1" aria-labelledby="modalSambutanLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-flex align-items-center">
                            <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                <i class="bi bi-quote fs-4"></i>
                            </div>
                            <h5 class="modal-title" id="modalSambutanLabel">Sambutan Lengkap Kepala Sekolah</h5>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-justify">
                            <h5 class="fw-bold text-dark mb-4">Assalamu'alaikum Warahmatullahi Wabarakatuh,</h5>
                            
                            <div class="mb-4">
                                {!! nl2br(e($kepala->sambutan)) !!}
                            </div>
                            
                            <h5 class="fw-bold text-dark mt-4">Wassalamu'alaikum Warahmatullahi Wabarakatuh.</h5>
                        </div>
                        
                        <div class="mt-5 pt-4 border-top">
                            <div class="d-flex align-items-center">
                                <img src="{{ $kepala->foto ? asset('storage/' . $kepala->foto) : asset('assets/img/person/default.jpg') }}" 
                                     alt="Foto" class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
                                <div>
                                    <h6 class="fw-bold mb-0">{{ $kepala->nama }}</h6>
                                    <p class="text-muted small mb-0">Kepala SMK Nasional Nganjuk</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Ekstrakurikuler Section -->
        <section id="ekstrakurikuler" class="py-5 bg-light position-relative">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="badge bg-danger px-3 py-2 rounded-pill mb-3 shadow-sm">Minat & Bakat</span>
                    <h2 class="display-5 fw-bold text-dark">Ekstrakurikuler</h2>
                    <div class="mx-auto mt-2" style="width: 80px; height: 4px; background: #b72b3f; border-radius: 2px;"></div>
                </div>

                <div class="row g-4">
                    @forelse ($ekstrakurikuler as $item)
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="ekstra-card">
                                <div class="ekstra-img-container">
                                    <img src="{{ $item->foto ? asset('storage/' . $item->foto) : 'https://via.placeholder.com/400x250' }}"
                                        class="ekstra-img" alt="Foto {{ $item->nama_ekstrakurikuler }}">
                                    <div class="ekstra-overlay">
                                        <span class="text-white small fw-bold">#SMKNasional</span>
                                    </div>
                                </div>
                                <div class="ekstra-content text-center">
                                    <h5 class="ekstra-title">{{ $item->nama_ekstrakurikuler }}</h5>
                                    <p class="ekstra-desc">{{ Str::limit($item->keterangan, 70) }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5">
                            <div class="bg-white p-5 rounded-4 shadow-sm d-inline-block">
                                <i class="bi bi-info-circle fs-1 text-muted mb-3 d-block"></i>
                                <p class="mb-0 text-dark">Belum ada data ekstrakurikuler yang tersedia.</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
            </main>
    
    
                <footer id="kontak" class="footer-dark py-5">
                    <div class="container">
                        <div class="row gy-4">

                            <!-- Profil Sekolah -->
                            <div class="col-lg-5 mb-5">
                                    <div class="footer-logo d-flex align-items-center">
                    <img src="{{ asset('assets/logobaru.png') }}" 
                        alt="SMK Nasional Nganjuk" 
                        width="100" 
                        height="100" 
                        class="me-4">

                    <span class="fw-bold fs-4 text-white text-nowrap">
                    SMK Nasional Nganjuk
                </span>


                </div>

                    <p class="footer-about">Sekolah Menengah Kejuruan yang berkomitmen untuk menghasilkan lulusan yang
                        kompeten, berakhlak mulia, dan siap menghadapi tantangan dunia kerja.</p>
                    <div class="footer-social">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

            <!-- Tautan Cepat -->
            <div class="col-lg-3 mb-5">
                <h5 class="footer-title">Tautan Cepat</h5>
                <ul class="footer-links">
                    <li><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li><a href="{{ route('visi-misi') }}">Visi & Misi</a></li>
                    <li><a href="{{ route('data-jurusan') }}">Program Jurusan</a></li>
                    <li><a href="{{ route('data-fasilitas') }}">Fasilitas</a></li>
                    <li><a href="{{ route('data-pbdb') }}">PPDB</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div class="col-lg-3 mb-5">
                <h5 class="footer-title">Kontak Kami</h5>
                <ul class="footer-contact">
                    <li><i class="bi bi-geo-alt"></i> Jl. P. Diponegoro No. 73, Nganjuk</li>
                    <li><i class="bi bi-telephone"></i> (0358) 321160</li>
                    <li><i class="bi bi-envelope"></i> info@smknasional.sch.id</li>
                    <li><i class="bi bi-clock"></i> 07.00 - 13.00 WIB</li>
                </ul>
            </div>

        </div>

        <hr class="footer-line">

        <div class="text-center text-white">
    <small>© 2024 SMK Nasional Nganjuk. Yayasan Nasional Nganjuk.</small>
</div>

    </div>
</footer>


        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

        <!-- Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
