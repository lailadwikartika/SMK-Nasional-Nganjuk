<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Data Guru | SMK Nasional Nganjuk</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Tenaga Pendidik Profesional SMK Nasional Nganjuk">
    <meta name="keywords" content="Guru, SMK Nasional Nganjuk, Tenaga Pendidik">

    <!-- Favicons -->
    <link href="{{ asset('assets/logobaru.png') }}" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

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
            --brand-red: #cc0000;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f9fa;
        }

        h1, h2, h3, h4, h5, h6, .sitename {
            font-family: 'Outfit', sans-serif;
        }

        /* Teacher Card Mockup Implementation */
        .teacher-card {
            background: white;
            border-radius: 35px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            border: none;
            overflow: hidden;
        }

        .teacher-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .teacher-top {
            background-color: var(--brand-red);
            height: 480px;
            position: relative;
            display: flex;
            align-items: flex-end;
            padding: 30px;
        }

        .teacher-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: bottom;
            transition: transform 0.6s ease;
        }

        .teacher-card:hover .teacher-img {
            transform: scale(1.05);
        }

        .teacher-overlay {
            position: relative;
            z-index: 2;
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5), transparent);
            margin: -30px;
            padding: 40px 30px 40px;
        }

        .teacher-name {
            font-size: 1.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 15px;
            line-height: 1.2;
            text-transform: uppercase;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .teacher-subject-badge {
            display: inline-block;
            padding: 8px 20px;
            background: #b72b3f;
            color: white;
            font-size: 0.8rem;
            border-radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .teacher-bottom {
            padding: 25px 30px;
            background: white;
            display: flex;
            align-items: center;
        }

        .nip-label {
            display: flex;
            align-items: center;
            color: #888;
            font-size: 0.95rem;
            font-weight: 500;
        }

        .nip-icon {
            width: 38px;
            height: 38px;
            background: #fdf2f3;
            border: 1px solid #fee2e4;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #cc0000;
            margin-right: 15px;
            font-size: 1.1rem;
        }

        .nip-value {
            color: #444;
            font-weight: 700;
        }

        @media (max-width: 991px) {
            .teacher-top { height: 400px; }
        }

        @media (max-width: 768px) {
            .teacher-top { height: 350px; }
            .teacher-name { font-size: 1.25rem; }
            .teacher-bottom { padding: 20px; }
            .nip-icon { width: 32px; height: 32px; margin-right: 12px; font-size: 1rem; }
        }

        @media (max-width: 576px) {
            .teacher-top { height: 300px; }
            .teacher-name { font-size: 1.1rem; }
            .teacher-subject-badge { padding: 6px 15px; font-size: 0.7rem; }
        }
    </style>

</head>

<body class="starter-page-red">

    <header id="header" class="header header-solid d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="{{ asset('assets/logobaru.png') }}" alt="Logo SMK Nasional Nganjuk"
                    style="height: 60px; width: auto; margin-right: 12px;">
                <h1 class="sitename m-0 fs-4">SMK Nasional Nganjuk</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="dropdown"><a href="#"><span>Profile</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ route('visi-misi') }}">Visi & Misi</a></li>
                            <li><a href="{{ route('sejarah-sekolah') }}">Sejarah Sekolah</a></li>
                            <li><a href="{{ route('data-jurusan') }}">Data Jurusan</a></li>
                            <li><a href="{{ route('data-fasilitas') }}">Fasilitas</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('data-struktur-organisasi') }}">Struktur Organisasi</a></li>
                    <li><a href="{{ route('data-bkk') }}">BKK</a></li>
                    <li class="dropdown"><a href="#" class="active"><span>Data Kepegawaian</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ route('data-kepala-sekolah') }}">Data Kepala Sekolah</a></li>
                            <li><a href="{{ route('data-guru') }}">Data Guru</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('data-pbdb') }}">PPDB</a></li>
                    <li><a href="{{ route('lokasi') }}">Lokasi</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">

        <!-- Page Title Section -->
        <section class="page-title-dark">
            <div class="container">
                <h1>Data Guru</h1>
                <p>Tenaga Pendidik Profesional dan Berdedikasi SMK Nasional Nganjuk</p>
            </div>
        </section>

        <!-- Teacher Grid Section -->
        <section class="section">
            <div class="container">
                <div class="row gy-5">
                    @forelse($guru as $item)
                        <div class="col-xl-4 col-md-6" data-aos="fade-up"
                            data-aos-delay="{{ 100 * ($loop->index % 3) }}">
                            <div class="teacher-card">
                                <div class="teacher-top">
                                    @if ($item->foto)
                                        <img src="{{ asset('storage/' . $item->foto) }}" class="teacher-img"
                                            alt="Foto {{ $item->nama }}">
                                    @else
                                        <img src="{{ asset('assets/img/person/default.jpg') }}" class="teacher-img"
                                            alt="Foto Default">
                                    @endif
                                    <div class="teacher-overlay">
                                        <h3 class="teacher-name">{{ $item->nama ?? '-' }}</h3>
                                        <span
                                            class="teacher-subject-badge">{{ $item->mata_pelajaran ?? 'Tenaga Pendidik' }}</span>
                                    </div>
                                </div>

                                <div class="teacher-bottom">
                                    <div class="nip-label">
                                        <div class="nip-icon">
                                            <i class="bi bi-person-badge"></i>
                                        </div>
                                        <div>
                                            <span class="small d-block text-uppercase opacity-50" style="letter-spacing: 1px;">NIP / NUPTK</span>
                                            <span class="nip-value">{{ $item->nip_nuptk ?? '-' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5" data-aos="fade-up">
                            <div class="alert alert-info py-5 shadow-sm border-0 rounded-4">
                                <i class="bi bi-people fs-1 d-block mb-3 text-info"></i>
                                <h4 class="fw-bold">Data Belum Tersedia</h4>
                                <p class="mb-0">Mohon maaf, data tenaga pendidik sedang dalam proses pembaruan.</p>
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
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
