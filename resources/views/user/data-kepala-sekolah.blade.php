<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <title>Kepala Sekolah | SMK Nasional Nganjuk</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="Profil Kepala Sekolah SMK Nasional Nganjuk">
  <meta name="keywords" content="Kepala Sekolah, SMK Nasional Nganjuk, Profil">

  <!-- Favicons -->
  <link href="{{ asset('assets/logobaru.png') }}" rel="icon">
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

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
      --glass-bg: rgba(255, 255, 255, 0.9);
      --glass-border: rgba(255, 255, 255, 0.3);
    }

    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #f8f9fa;
    }

    h1, h2, h3, h4, h5, h6, .sitename {
      font-family: 'Outfit', sans-serif;
    }

    /* Profile Section */
    .profile-section {
      margin-top: 50px;
      padding-bottom: 80px;
      position: relative;
      z-index: 10;
    }

    .profile-card {
      background: white;
      border-radius: 30px;
      box-shadow: 0 20px 60px rgba(0,0,0,0.08);
      overflow: hidden;
      border: none;
    }

    .photo-wrapper {
      position: relative;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 15px 35px rgba(183, 43, 63, 0.2);
    }

    .photo-wrapper img {
      width: 100%;
      height: 550px;
      object-fit: cover;
      object-position: top;
      transition: transform 0.5s ease;
    }

    .photo-wrapper:hover img {
      transform: scale(1.03);
    }

    .photo-decoration {
      position: absolute;
      top: 20px;
      left: 20px;
      right: 20px;
      bottom: 20px;
      border: 2px solid rgba(255, 255, 255, 0.3);
      border-radius: 15px;
      pointer-events: none;
      z-index: 1;
    }

    .info-badge {
      display: inline-block;
      padding: 8px 20px;
      background: var(--primary-red);
      color: white;
      border-radius: 50px;
      font-weight: 600;
      font-size: 0.9rem;
      margin-bottom: 20px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .greeting-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 25px;
      position: relative;
    }

    .greeting-title::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -8px;
      width: 60px;
      height: 4px;
      background: var(--primary-red);
      border-radius: 2px;
    }

    .greeting-text {
      color: #666;
      line-height: 1.8;
      font-size: 1.1rem;
      margin-bottom: 30px;
      text-align: justify;
    }

    .info-list {
      background: #fdf2f3;
      border-radius: 20px;
      padding: 30px;
    }

    .info-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .info-item:last-child {
      margin-bottom: 0;
    }

    .info-icon {
      width: 50px;
      height: 50px;
      background: white;
      border-radius: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--primary-red);
      font-size: 1.3rem;
      margin-right: 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .info-label {
      font-size: 0.85rem;
      color: #999;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 2px;
    }

    .info-value {
      font-weight: 700;
      color: #333;
      font-size: 1.1rem;
    }

    .fancy-quote {
        font-family: 'Outfit', sans-serif;
        font-style: italic;
        color: var(--primary-red);
        font-size: 1.2rem;
        border-left: 4px solid var(--primary-red);
        padding-left: 20px;
        margin: 30px 0;
    }

    @media (max-width: 991px) {
      .photo-wrapper img { height: 450px; }
      .profile-section { margin-top: 20px; }
      .greeting-title { font-size: 2rem; }
    }

    @media (max-width: 768px) {
      .greeting-title { font-size: 1.75rem; }
      .greeting-text { font-size: 1rem; }
      .info-list { padding: 20px; }
      .info-icon { width: 45px; height: 45px; margin-right: 15px; font-size: 1.1rem; }
      .info-value { font-size: 1rem; }
    }

    @media (max-width: 576px) {
      .profile-card { padding: 25px !important; }
      .greeting-title { font-size: 1.5rem; }
      .info-item { margin-bottom: 15px; }
      .photo-wrapper img { height: 350px; }
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
          <li class="dropdown"><a href="#" class="active"><span>Data Kepegawaian</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
            <h1>Data Kepala Sekolah</h1>
            <p>Dedikasi dan Visi untuk Generasi Unggul SMK Nasional Nganjuk</p>
        </div>
    </section>

    <!-- Profile Section -->
    <section class="profile-section">
        <div class="container">
            <div class="profile-card p-4 p-lg-5">
              @if($kepala)
                <div class="row gy-5 align-items-center">
                    <!-- Photo Column -->
                    <div class="col-lg-5" data-aos="fade-right">
                        <div class="photo-wrapper">
                            @if($kepala->foto)
                              <img src="{{ asset('storage/'.$kepala->foto) }}" alt="{{ $kepala->nama }}">
                            @else
                              <img src="{{ asset('assets/img/person/person-m-2.webp') }}" alt="Default Photo">
                            @endif
                            <div class="photo-decoration"></div>
                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="col-lg-7 ps-lg-5" data-aos="fade-left">
                        <span class="info-badge">Profil Pimpinan</span>
                        <h2 class="greeting-title">{{ $kepala->nama ?? '-' }}</h2>
                        
                        <div class="greeting-text">
                            <p>Assalamu'alaikum Warahmatullahi Wabarakatuh,</p>
                            <p>Selamat datang di portal informasi SMK Nasional Nganjuk. Sebagai pimpinan di lembaga pendidikan ini, saya berkomitmen untuk membawa SMK Nasional Nganjuk menjadi pusat keunggulan yang mencetak lulusan kompeten dan berkarakter.</p>
                            
                            <div class="fancy-quote">
                                "Pendidikan adalah senjata paling mematikan di dunia, karena dengan pendidikan, Anda dapat mengubah dunia."
                            </div>
                            
                            <p>Kami terus bertransformasi mengikuti perkembangan teknologi dan kebutuhan industri, guna memastikan setiap siswa mendapatkan bekal terbaik untuk masa depan mereka. Terima kasih atas kepercayaan Anda kepada kami.</p>
                        </div>

                        <div class="info-list">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="info-item">
                                        <div class="info-icon"><i class="bi bi-person-badge"></i></div>
                                        <div>
                                            <div class="info-label">NIP / NUPTK</div>
                                            <div class="info-value">{{ $kepala->nip_nuptk ?? '-' }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-item">
                                        <div class="info-icon"><i class="bi bi-gender-ambiguous"></i></div>
                                        <div>
                                            <div class="info-label">Jenis Kelamin</div>
                                            <div class="info-value">{{ $kepala->jenis_kelamin ?? '-' }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-item">
                                        <div class="info-icon"><i class="bi bi-calendar-event"></i></div>
                                        <div>
                                            <div class="info-label">Tanggal Lahir</div>
                                            <div class="info-value">{{ $kepala->tanggal_lahir ? \Carbon\Carbon::parse($kepala->tanggal_lahir)->translatedFormat('d F Y') : '-' }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-item">
                                        <div class="info-icon"><i class="bi bi-mortarboard"></i></div>
                                        <div>
                                            <div class="info-label">Jabatan</div>
                                            <div class="info-value">Kepala Sekolah</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              @else
                <div class="text-center py-5">
                    <div class="alert alert-info py-5 shadow-sm border-0 rounded-4">
                        <i class="bi bi-person-exclamation fs-1 d-block mb-3 text-info"></i>
                        <h4 class="fw-bold">Data Belum Tersedia</h4>
                        <p class="mb-0">Mohon maaf, profil kepala sekolah sedang dalam proses pembaruan data.</p>
                    </div>
                </div>
              @endif
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
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
