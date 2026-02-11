<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Detail Lowongan - {{ $bkk->judul_lowongan }}</title>
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

@php
    $is_closed = \Carbon\Carbon::parse($bkk->tanggal_ditutup)->isPast();
@endphp

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
          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('visi-misi') }}">Visi & Misi</a></li>
              <li><a href="{{ route('sejarah-sekolah') }}">Sejarah Sekolah</a></li>
              <li><a href="{{ route('data-jurusan') }}">Data Jurusan</a></li>
              <li><a href="{{ route('data-fasilitas') }}">Fasilitas</a></li>
            </ul>
          </li>
          <li><a href="{{ route('data-struktur-organisasi') }}">Struktur Organisasi</a></li>
          <li><a href="{{ route('data-bkk') }}" class="active">BKK</a></li>
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

<main class="main">
    <!-- Breadcrumbs Section -->
    <div class="page-title-dark mb-0">
        <div class="container">
            <h1 class="fw-bold">{{ $bkk->judul_lowongan }}</h1>
        </div>
    </div>

    <!-- Job Detail Section -->
    <section class="section bg-light py-5">
        <div class="container">
            <div class="row gy-4">
                
                <!-- Left Column: Image & Details -->
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4" data-aos="fade-up">
                        @if ($bkk->foto)
                            <div style="max-height: 500px; overflow: hidden; position: relative;">
                                <img src="{{ asset('storage/' . $bkk->foto) }}" class="img-fluid w-100" alt="{{ $bkk->judul_lowongan }}" style="object-fit: contain; background: #f8f9fa;">
                            </div>
                        @endif
                        
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex flex-wrap align-items-center gap-2 mb-4">
                                <span class="badge bg-danger px-3 py-2 rounded-pill shadow-sm">
                                    <i class="bi bi-briefcase me-1"></i> Lowongan Kerja
                                </span>
                                @if($is_closed)
                                    <span class="badge bg-secondary px-3 py-2 rounded-pill shadow-sm">
                                        <i class="bi bi-lock me-1"></i> Sudah Ditutup
                                    </span>
                                @else
                                    <span class="badge bg-success px-3 py-2 rounded-pill shadow-sm">
                                        <i class="bi bi-check-circle me-1"></i> Sedang Dibuka
                                    </span>
                                @endif
                            </div>

                            <h3 class="fw-bold text-dark mb-4">Persyaratan & Deskripsi</h3>
                            <div class="persyaratan-text" style="line-height: 1.8; color: #555; text-align: justify;">
                                {!! nl2br(e($bkk->persyaratan)) !!}
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-start mt-4">
                        <a href="{{ route('data-bkk') }}" class="btn btn-outline-danger rounded-pill px-4 py-2 fw-bold transition-all shadow-sm">
                            <i class="bi bi-arrow-left me-2"></i> Kembali ke Daftar
                        </a>
                    </div>
                </div>

                <!-- Right Column: Sidebar -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 info-sidebar sticky-top" style="top: 100px;" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body p-4">
                            <h5 class="fw-bold border-bottom pb-3 mb-4">Ringkasan Lowongan</h5>
                            
                            <div class="info-item-box mb-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-box-sm me-3 text-danger">
                                        <i class="bi bi-building fs-4"></i>
                                    </div>
                                    <div>
                                        <span class="small text-muted d-block">Perusahaan</span>
                                        <span class="fw-bold text-dark">{{ $bkk->nama_perusahaan }}</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-box-sm me-3 text-danger">
                                        <i class="bi bi-calendar-check fs-4"></i>
                                    </div>
                                    <div>
                                        <span class="small text-muted d-block">Pendaftaran Dibuka</span>
                                        <span class="fw-bold text-dark">{{ \Carbon\Carbon::parse($bkk->tanggal_dibuka)->translatedFormat('d F Y') }}</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-box-sm me-3 text-danger">
                                        <i class="bi bi-calendar-x fs-4"></i>
                                    </div>
                                    <div>
                                        <span class="small text-muted d-block">Batas Akhir</span>
                                        <span class="fw-bold text-dark">{{ \Carbon\Carbon::parse($bkk->tanggal_ditutup)->translatedFormat('d F Y') }}</span>
                                    </div>
                                </div>
                            </div>

                            @if(!$is_closed)
                                <div class="alert alert-danger border-0 rounded-3 mb-0">
                                    <i class="bi bi-info-circle me-2"></i>
                                    Jangan lewatkan kesempatan ini. Segera siapkan berkas Anda!
                                </div>
                            @else
                                <div class="alert alert-secondary border-0 rounded-3 mb-0">
                                    <i class="bi bi-exclamation-triangle me-2"></i>
                                    Masa pendaftaran lowongan ini telah berakhir.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<style>
    .icon-box-sm {
        width: 42px;
        height: 42px;
        background: #fdf2f3;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .info-sidebar {
        z-index: 10;
        transition: transform 0.3s ease;
    }
    
    .persyaratan-text {
        font-size: 1.05rem;
    }
    
    .breadcrumb-item + .breadcrumb-item::before {
        color: rgba(255,255,255,0.5);
    }
    
    @media (max-width: 991px) {
        .sticky-top {
            position: relative !important;
            top: 0 !important;
        }
    }
</style>

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
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
