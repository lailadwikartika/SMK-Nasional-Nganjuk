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



    <!-- Halaman Sejarah -->
    <main class="main">
        <!-- Hero Section (Compact Premium) -->
        <section class="hero-section position-relative d-flex align-items-center justify-content-center"
            style="min-height:450px; background: url('{{ asset('assets/foto sekolah.jpg') }}') center center/cover no-repeat; padding-top: 80px;">
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.4));"></div>
            <div class="container position-relative z-2" data-aos="fade-up">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10 text-center text-white">
                        <h1 class="display-3 fw-bold mb-0 text-white">Sejarah SMK Nasional Nganjuk</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="section bg-light py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-9">
                        <div class="card border-0 shadow-lg rounded-4 overflow-hidden" data-aos="fade-up">
                            <div class="card-body p-4 p-md-5 bg-white">
                                <div class="text-center mb-5">
                                    <div class="icon-box-red mx-auto mb-3">
                                        <i class="bi bi-clock-history fs-2 text-danger"></i>
                                    </div>
                                    <h2 class="fw-bold display-6 text-dark mb-2">Dedikasi Untuk Negeri</h2>
                                    <div class="mx-auto" style="width: 60px; height: 4px; background: var(--accent-color); border-radius: 2px;"></div>
                                </div>

                                <div class="sejarah-content fs-5 text-muted leading-relaxed">
                                    @if (isset($data->sejarah))
                                        @php
                                            $paragraphs = preg_split('/\r\n|\r|\n/', $data->sejarah);
                                            $paragraphs = array_filter(array_map('trim', $paragraphs));
                                        @endphp

                                        @foreach ($paragraphs as $index => $para)
                                            @if ($index === 0)
                                                <div class="text-justify mb-4">
                                                    <span class="drop-cap">{{ mb_substr($para, 0, 1) }}</span>{{ mb_substr($para, 1) }}
                                                </div>
                                            @else
                                                <div class="text-justify mb-4">{{ $para }}</div>
                                            @endif
                                        @endforeach
                                    @else
                                        <div class="alert alert-info text-center rounded-4 border-0 shadow-sm p-4">
                                            <i class="bi bi-info-circle fs-3 mb-2 d-block"></i>
                                            <span>Data sejarah sekolah belum tersedia. Silakan lengkapi di halaman admin.</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Milestone Banner -->
                        <div class="mt-5 p-4 rounded-4 bg-danger text-white shadow-lg d-flex align-items-center justify-content-between flex-wrap gap-4" data-aos="zoom-in">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-calendar-check fs-1 me-3 opacity-75"></i>
                                <div>
                                    <h4 class="fw-bold mb-0 text-white">Sejak 2014</h4>
                                    <p class="mb-0 small opacity-75">Update Legalitas & Status Hukum</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-award fs-1 me-3 opacity-75"></i>
                                <div>
                                    <h4 class="fw-bold mb-0 text-white">Akreditasi B</h4>
                                    <p class="mb-0 small opacity-75">Komitmen Kualitas Nasional</p>
                                </div>
                            </div>
                            <div class="text-md-end">
                                <a href="{{ route('data-pbdb') }}" class="btn btn-outline-light rounded-pill px-4">Bergabunglah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
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
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
