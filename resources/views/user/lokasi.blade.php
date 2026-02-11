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

</head>

<body class="starter-page-red">

<header id="header" class="header header-solid d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('beranda') }}" class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="{{ asset('assets/logobaru.png') }}" alt="Logo SMK Nasional Nganjuk"
                style="height: 60px; width: auto; margin-right: 12px;">
            <h1 class="sitename m-0 fs-4">SMK Nasional Nganjuk</h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('beranda') }}">Beranda</a></li>
                <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('visi-misi') }}">Visi & Misi</a></li>
                        <li><a href="{{ route('sejarah-sekolah') }}">Sejarah Sekolah</a></li>
                        <li><a href="{{ route('data-jurusan') }}">Data Jurusan</a></li>
                        <li><a href="{{ route('data-fasilitas') }}">Fasilitas</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('data-struktur-organisasi') }}">Struktur Organisasi</a></li>
                <li><a href="{{ route('data-bkk') }}">BKK</a></li>
                <li class="dropdown"><a href="#"><span>Data Kepegawaian</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('data-kepala-sekolah') }}">Data Kepala Sekolah</a></li>
                        <li><a href="{{ route('data-guru') }}">Data Guru</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('data-pbdb') }}">PPDB</a></li>
                <li><a href="{{ route('lokasi') }}" class="active">Lokasi</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>

<!-- Konten Lokasi Sekolah -->
<main class="main">
    
    <!-- Page Title -->
    <section class="page-title-dark">
        <div class="container">
            <h1>Lokasi Sekolah</h1>
            <p>Temukan kami di Peta Digital</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-4 mb-5">
                         <div class="col-md-6">
                            <div class="feature-card p-4 h-100 d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                            <i class="bi bi-geo-alt fs-3"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="fw-bold mb-1">Alamat</h5>
                                        <p class="mb-0 text-muted small">Jl. Diponegoro No.73, Nganjuk, Ganung Kidul, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64419</p>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="feature-card p-4 h-100 d-flex align-items-center">
                                   <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                            <i class="bi bi-telephone fs-3"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="fw-bold mb-1">Kontak</h5>
                                        <p class="mb-0 text-muted small">Telp: (0358) 321160<br>Email: info@smknasional.sch.id</p>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>

                    <div class="card shadow-lg border-0 rounded-4 overflow-hidden" data-aos="fade-up">
                        <iframe style="border:0; width: 100%; height: 450px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.651042940989!2d111.90184457591184!3d-7.604985292404877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784b08028f672d%3A0xf38d14d81abf7e8f!2sYayasan%20Nasional%20Nganjuk%20Sekolah%20Menengah%20Kejuruan%20Nasional!5e0!3m2!1sid!2sid!4v1717002345678!5m2!1sid!2sid"
                            allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
    <!-- Footer -->

<!-- Footer -->
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
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
    <script src="assets/js/main.js"></script>

</body>

</html>
