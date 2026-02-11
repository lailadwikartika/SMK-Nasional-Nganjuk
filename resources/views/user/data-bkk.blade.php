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
      <a class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="{{ asset('assets/logobaru.png') }}" alt="Logo SMK Nasional Nganjuk"
                    style="height: 60px; width: auto; margin-right: 12px;">
                <h1 class="sitename m-0 fs-4">SMK Nasional Nganjuk</h1>
            </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <a href="{{ route('beranda') }}">Beranda</a>
          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <a href="{{ route('visi-misi') }}">Visi & Misi</a>
              <a href="{{ route('sejarah-sekolah') }}">Sejarah Sekolah</a>
              <a href="{{ route('data-jurusan') }}">Data Jurusan</a>
              <a href="{{ route('data-fasilitas') }}">Fasilitas</a>
            </ul>
          </li>
          <a href="{{ route('data-struktur-organisasi') }}">Struktur Organisasi</a>
          <a href="{{ route('data-bkk') }}"class="active">BKK</a>
          <li class="dropdown"><a href="#"><span>Data Kepegawaian</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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

<!-- Konten BKK -->
<main class="main">
  
    <!-- Page Title -->
    <section class="page-title-dark">
        <div class="container">
            <h1>Bursa Kerja Khusus</h1>
            <p>Jembatan Penghubung Antara Alumni dan Dunia Kerja</p>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="section pb-0">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                     <div class="p-4 bg-light rounded shadow-sm border-start border-4 border-danger">
                        <p class="mb-3 text-justify">
                            <strong>Bursa Kerja Khusus (BKK)</strong> adalah lembaga yang dibentuk untuk mengoptimalkan peran sekolah menengah kejuruan (SMK) dalam mengurangi pengangguran, yakni berperan dalam menyalurkan alumni/lulusan masing-masing lembaga pendidikan kejuruan khususnya SMK.
                        </p>
                        <p class="mb-0 text-justify">
                            BKK diharapkan menjadi penghubung dengan pengguna tenaga kerja (DUDI), mempermudah rekrutmen sesuai kompetensi lulusan.
                        </p>
                     </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita BKK Section -->
    <section class="section">
        <div class="container">
             <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Berita & Lowongan Terbaru</h2>
                <p>Informasi terkini seputar lowongan kerja dan kegiatan BKK</p>
            </div>

            <div class="row gy-4">
                @forelse ($berita_bkk as $berita)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card h-100 d-flex flex-column p-0 border-0 shadow">
                             <div style="height: 200px; overflow: hidden; position: relative;">
                                <img src="{{ $berita->foto ? asset('storage/' . $berita->foto) : 'https://via.placeholder.com/400x250' }}" 
                                     alt="{{ $berita->judul_lowongan }}" 
                                     style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                             </div>
                            
                            <div class="feature-card-body d-flex flex-column flex-grow-1 p-4">
                                <h5 class="fw-bold mb-2">{{ $berita->judul_lowongan }}</h5>
                                <div class="mb-3 text-muted small">
                                    <i class="bi bi-clock-history me-1"></i> 
                                    Ditutup: {{ \Carbon\Carbon::parse($berita->tanggal_ditutup)->translatedFormat('d F Y') }}
                                </div>
                                <p class="text-secondary mb-4 flex-grow-1">
                                    {{ Str::limit($berita->persyaratan, 100) }}
                                </p>
                                <a href="{{ route('bkk.show', $berita->id_bkk) }}" class="btn text-white w-100 fw-bold" style="background-color: var(--accent-color);">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info text-center py-5">
                             <i class="bi bi-info-circle fs-1 d-block mb-3"></i>
                            <h5 class="fw-bold">Belum ada informasi terbaru</h5>
                            <p>Saat ini belum ada berita atau lowongan kerja yang tersedia.</p>
                        </div>
                    </div>
                @endforelse
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
