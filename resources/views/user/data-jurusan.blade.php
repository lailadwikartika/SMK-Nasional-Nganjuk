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

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="{{ route('beranda') }}" class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="{{ asset('assets/logobaru.png') }}" alt="Logo SMK Nasional Nganjuk"
                    style="height: 60px; width: auto; margin-right: 12px;">
                <h1 class="sitename m-0 fs-4">SMK Nasional Nganjuk</h1>
            </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('beranda') }}">Beranda</a></li>
          <li class="dropdown"><a href="#" class="active"><span>Profile</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
          <li><a href="{{ route('lokasi') }}">Lokasi</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

<!-- Konten Data Jurusan -->
<main class="main">
    
    <!-- Page Title -->
    <section class="page-title-dark">
        <div class="container">
            <h1>Jurusan</h1>
            <p>Program Keahlian Unggulan SMK Nasional Nganjuk</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="section">
        <div class="container">
            <div class="row g-4">
                @if($jurusan->count() > 0)
                    @foreach($jurusan as $j)
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                            <div class="feature-card">
                                <div class="feature-card-header">
                                    <div class="feature-icon">
                                        <i class="bi bi-mortarboard-fill"></i>
                                    </div>
                                    <h3>{{ $j->nama_jurusan }}</h3>
                                </div>
                                <div class="feature-card-body">
                                    <ul class="feature-list">
                                        <li>
                                            <i class="bi bi-upc-scan"></i>
                                            <span><strong>Kode:</strong> {{ $j->kode_jurusan ?? '-' }}</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-info-circle"></i>
                                            <span>
                                                {{ $j->keterangan ?? 'Tidak ada keterangan' }}
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <div class="alert alert-info text-center">
                            Belum ada data jurusan yang tersedia.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

</main>

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
