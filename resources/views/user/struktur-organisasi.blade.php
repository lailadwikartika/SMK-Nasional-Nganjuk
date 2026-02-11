<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Struktur Organisasi - SMK Nasional Nganjuk</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{ asset('assets/logobaru.png') }}" rel="icon">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
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
                    <li class="dropdown"><a href="#"><span>Profile</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ route('visi-misi') }}">Visi & Misi</a></li>
                            <li><a href="{{ route('sejarah-sekolah') }}">Sejarah Sekolah</a></li>
                            <li><a href="{{ route('data-jurusan') }}">Data Jurusan</a></li>
                            <li><a href="{{ route('data-fasilitas') }}">Fasilitas</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('data-struktur-organisasi') }}" class="active">Struktur Organisasi</a></li>
                    <li><a href="{{ route('data-bkk') }}">BKK</a></li>
                    <li class="dropdown"><a href="#"><span>Data Kepegawaian</span> <i
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
        <section class="page-title-dark">
            <div class="container">
                <h1>Struktur Organisasi</h1>
                <p>Susunan pengelola dan manajemen SMK Nasional Nganjuk</p>
            </div>
        </section>

        <section class="section">
            <div class="container text-center">
                @if (isset($data->foto_struktur))
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" data-aos="zoom-in">
                        <img src="{{ asset('storage/' . $data->foto_struktur) }}" alt="Struktur Organisasi"
                            class="img-fluid">
                    </div>
                @else
                    <div class="alert alert-danger rounded-4 p-4 shadow-sm border-0 d-inline-block">
                        <i class="bi bi-exclamation-triangle-fill fs-3 mb-2 d-block"></i>
                        <span class="fw-bold">Data struktur organisasi belum tersedia.</span>
                    </div>
                @endif
            </div>
        </section>
    </main>

    <footer id="kontak" class="footer-dark py-5">
        <div class="container">
            <div class="row gy-4">
                <!-- Profil Sekolah -->
                <div class="col-lg-5 mb-5">
                    <div class="footer-logo d-flex align-items-center mb-3">
                        <img src="{{ asset('assets/logobaru.png') }}" alt="SMK Nasional Nganjuk" width="80"
                            height="80" class="me-3">
                        <span class="fw-bold fs-4 text-white text-nowrap">SMK Nasional Nganjuk</span>
                    </div>
                    <p class="footer-about opacity-75">Sekolah Menengah Kejuruan yang berkomitmen untuk menghasilkan
                        lulusan yang kompeten, berakhlak mulia, dan siap menghadapi tantangan dunia kerja.</p>
                    <div class="footer-social mt-4">
                        <a href="#" class="me-3"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" class="me-3"><i class="bi bi-instagram fs-5"></i></a>
                        <a href="#" class="me-3"><i class="bi bi-youtube fs-5"></i></a>
                        <a href="#"><i class="bi bi-tiktok fs-5"></i></a>
                    </div>
                </div>

                <!-- Tautan Cepat -->
                <div class="col-lg-3 mb-5">
                    <h5 class="footer-title fw-bold">Tautan Cepat</h5>
                    <ul class="footer-links list-unstyled opacity-75">
                        <li class="mb-2"><a href="{{ route('beranda') }}">Beranda</a></li>
                        <li class="mb-2"><a href="{{ route('visi-misi') }}">Visi & Misi</a></li>
                        <li class="mb-2"><a href="{{ route('data-jurusan') }}">Program Jurusan</a></li>
                        <li class="mb-2"><a href="{{ route('data-fasilitas') }}">Fasilitas</a></li>
                        <li class="mb-2"><a href="{{ route('data-pbdb') }}">PPDB</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div class="col-lg-3 mb-5">
                    <h5 class="footer-title fw-bold">Kontak Kami</h5>
                    <ul class="footer-contact list-unstyled opacity-75">
                        <li class="mb-3 d-flex align-items-start"><i class="bi bi-geo-alt me-2 mt-1"></i> Jl. P.
                            Diponegoro No. 73, Nganjuk</li>
                        <li class="mb-3 d-flex align-items-start"><i class="bi bi-telephone me-2 mt-1"></i> (0358)
                            321160</li>
                        <li class="mb-3 d-flex align-items-start"><i class="bi bi-envelope me-2 mt-1"></i>
                            info@smknasional.sch.id</li>
                        <li class="mb-1 d-flex align-items-start"><i class="bi bi-clock me-2 mt-1"></i> 07.00 - 13.00
                            WIB</li>
                    </ul>
                </div>
            </div>

            <hr class="footer-line opacity-25">
            <div class="text-center">
                <small class="opacity-75">© 2024 SMK Nasional Nganjuk. Yayasan Nasional Nganjuk.</small>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
