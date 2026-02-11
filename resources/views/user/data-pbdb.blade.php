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
          <li><a href="{{ route('data-pbdb') }}" class="active">PPDB</a></li>
          <li><a href="{{ route('lokasi') }}">Lokasi</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>



<!-- Konten Data Kepala Sekolah -->
<main class="main">
  
    <!-- Page Title -->
    <section class="page-title-dark">
        <div class="container">
            <h1>PPDB Online</h1>
            <p>Penerimaan Peserta Didik Baru Tahun Ajaran 2026/2027</p>
        </div>
    </section>


<section id="jalur-ppdb" class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold display-6">Jalur Penerimaan</h2>
            <p class="text-muted">Kami menyediakan {{ count($pbdp) }} jalur penerimaan untuk memberikan kesempatan yang adil dan merata</p>
        </div>

        @php
            // 1. Kumpulkan semua persyaratan khusus dari setiap jalur
            $allPersyaratanArrays = [];
            foreach($pbdp as $item) {
                if($item->persyaratan_khusus) {
                    $syaratList = preg_split('/\r\n|\r|\n/', $item->persyaratan_khusus);
                    $trimmedList = array_map('trim', array_filter($syaratList));
                    $allPersyaratanArrays[] = $trimmedList;
                }
            }

            // 2. Temukan persyaratan yang sama di semua jalur
            $commonPersyaratan = [];
            if(count($allPersyaratanArrays) > 0) {
                $commonPersyaratan = $allPersyaratanArrays[0];
                foreach($allPersyaratanArrays as $syaratArray) {
                    $commonPersyaratan = array_intersect($commonPersyaratan, $syaratArray);
                }
                $commonPersyaratan = array_values(array_unique($commonPersyaratan));
            }

            // 3. Buat array untuk persyaratan khusus per jalur (setelah menghapus yang umum)
            $persyaratanPerJalur = [];
            foreach($pbdp as $index => $item) {
                if($item->persyaratan_khusus) {
                    $syaratList = preg_split('/\r\n|\r|\n/', $item->persyaratan_khusus);
                    $trimmedList = array_map('trim', array_filter($syaratList));
                    // Hapus persyaratan yang umum
                    $khususUntukJalur = array_diff($trimmedList, $commonPersyaratan);
                    $persyaratanPerJalur[$index] = array_values($khususUntukJalur);
                } else {
                    $persyaratanPerJalur[$index] = [];
                }
            }
        @endphp

        <!-- Tampilkan setiap jalur dengan persyaratan khususnya -->
        <div class="row g-4">
        @forelse($pbdp as $index => $item)
            <div class="col-lg-6 mb-4">
                <div class="feature-card h-100 d-flex flex-column">
                    <!-- Custom Header for PPDB Card (Use Image if available, else generic) -->
                    <div class="feature-card-header" style="{{ $item->foto ? 'background: url('.asset('storage/' . $item->foto).') center/cover no-repeat; min-height: 200px;' : 'min-height: 150px;' }}">
                        @if($item->foto)
                            <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.5);"></div>
                        @endif
                        <div class="position-relative z-1">
                             <h3 class="fw-bold">{{ $item->nama_jalur }}</h3>
                        </div>
                    </div>

                    <div class="feature-card-body flex-grow-1 d-flex flex-column">
                         <div class="mb-3 text-center">
                            <span class="badge bg-light text-dark border p-2">
                                <i class="bi bi-calendar-event me-1"></i>
                                {{ \Carbon\Carbon::parse($item->tanggal_buka)->translatedFormat('d M') }} - {{ \Carbon\Carbon::parse($item->tanggal_tutup)->translatedFormat('d M Y') }}
                            </span>
                        </div>

                        <p class="text-muted text-center mb-4">
                            {{ $item->deskripsi_singkat ?? Str::limit($item->deskripsi, 100) }}
                        </p>

                         <!-- PERSYARATAN KHUSUS (tanpa yang umum) -->
                        @if(count($persyaratanPerJalur[$index]) > 0)
                            <div class="mb-3">
                                <h6 class="fw-bold text-dark"><i class="bi bi-list-check me-2"></i>Persyaratan Khusus:</h6>
                                <ul class="feature-list mt-2">
                                    @foreach($persyaratanPerJalur[$index] as $point)
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>{{ $point }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            <div class="mb-3 text-center text-muted fst-italic">
                                <small>Hanya persyaratan umum.</small>
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center py-4">
                    <i class="bi bi-info-circle me-2"></i>
                    Belum ada informasi Penerimaan Peserta Didik Baru yang tersedia saat ini.
                </div>
            </div>
        @endforelse
        </div>

        <!-- Tampilkan persyaratan umum di bagian bawah -->
        @if(count($commonPersyaratan) > 0)
            <div class="mt-5 pt-4">
                <div class="feature-card p-4 bg-light">
                    <h3 class="text-center fw-bold mb-4" style="color: var(--heading-color);">Persyaratan Umum</h3>
                    <p class="text-center text-muted mb-4">Persyaratan ini berlaku untuk semua jalur penerimaan</p>
                    
                    <div class="row justify-content-center">
                         <div class="col-lg-10">
                             <div class="row g-3">
                                @foreach($commonPersyaratan as $syarat)
                                    <div class="col-md-6">
                                        <div class="bg-white p-3 rounded shadow-sm d-flex align-items-start h-100">
                                            <i class="bi bi-check-circle-fill text-success me-3 mt-1 fs-5"></i>
                                            <span>{{ $syarat }}</span>
                                        </div>
                                    </div>
                                @endforeach
                             </div>
                         </div>
                    </div>
                </div>

                <!-- Centralized Call to Action -->
                <div class="mt-5 text-center" data-aos="fade-up">
                    <div class="p-5 rounded-4 shadow-lg text-white" style="background: linear-gradient(135deg, var(--accent-color), #d63384);">
                        <h2 class="fw-bold mb-3">Siap Menjadi Bagian dari SMK Nasional Nganjuk?</h2>
                        <p class="lead mb-4">Jangan lewatkan kesempatan untuk meraih masa depan cerah bersama kami. Klik tombol di bawah ini untuk mulai bergabung!</p>
                        <button type="button" class="btn btn-light btn-lg px-5 fw-bold text-danger shadow-sm rounded-pill hover-scale" onclick="bukaModalDaftar()">
                            <i class="bi bi-stars me-2"></i>Ayo Bergabung Bersama Kami!
                        </button>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>

<!-- Modal Pendaftaran -->
<div class="modal fade modal-premium" id="modalPendaftaran" tabindex="-1" aria-labelledby="modalPendaftaranLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white">
                <div class="d-flex align-items-center">
                    <div class="bg-white bg-opacity-20 rounded-circle p-2 me-3 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                        <i class="bi bi-person-plus-fill fs-4"></i>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold mb-0" id="modalPendaftaranLabel">Ayo Bergabung Bersama Kami!</h5>
                        <p class="small mb-0 text-black-50">Lengkapi data diri Anda untuk bergabung</p>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="alert-container"></div>
                <form id="formPendaftaran" onsubmit="submitPendaftaran(event)">
                    @csrf
                    <input type="hidden" name="jalur_id" id="input_jalur_id">
                    
                    <div class="row g-4">
                        <!-- Left Info Column -->
                        <div class="col-lg-5 mb-3 mb-lg-0 border-end d-none d-lg-block">
                            <div class="pe-4">
                                <h4 class="fw-bold mb-3" style="color: var(--accent-color);">Selamat Datang!</h4>
                                <p class="text-muted small mb-4">Anda sedang melakukan pendaftaran sebagai calon peserta didik baru di SMK Nasional Nganjuk.</p>
                                
                                <div class="p-3 rounded-3 bg-light mb-4">
                                    <h6 class="fw-bold mb-2 small"><i class="bi bi-shield-check me-2"></i>Privasi Data</h6>
                                    <p class="text-muted mb-0" style="font-size: 0.75rem;">Data yang Anda kirimkan terenkripsi dan hanya akan digunakan untuk keperluan seleksi PPDB sesuai kebijakan sekolah.</p>
                                </div>

                                <div class="d-flex align-items-center p-2">
                                    <img src="{{ asset('assets/logobaru.png') }}" alt="Logo" style="height: 40px;" class="me-3">
                                    <span class="fw-bold small">SMK Nasional Nganjuk</span>
                                </div>
                            </div>
                        </div>

                        <!-- Right Form Column -->
                        <div class="col-lg-7">
                            <div class="ps-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan nama lengkap" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Asal Sekolah</label>
                                    <input type="text" class="form-control" name="asal_sekolah" placeholder="Contoh: SMPN 1 Nganjuk" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">No. HP / WhatsApp</label>
                                    <input type="text" class="form-control" name="no_hp" placeholder="Contoh: 081234567890" required>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Alamat Lengkap</label>
                                    <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat rumah lengkap" required></textarea>
                                </div>

                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" name="persetujuan" id="persetujuan" required>
                                    <label class="form-check-label small text-muted" for="persetujuan">
                                        Saya menjamin kebenaran data yang dikirimkan.
                                    </label>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-lg fw-bold text-white shadow-sm py-3" id="btnSubmit" style="background-color: var(--accent-color); border-radius: 12px;">
                                        <i class="bi bi-send-fill me-2"></i>Kirim Sekarang  
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Sukses -->
<div class="modal fade" id="modalSukses" tabindex="-1" aria-labelledby="modalSuksesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-white" style="background-color: var(--accent-color);">
                <h5 class="modal-title" id="modalSuksesLabel">Notifikasi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center py-4">
                <div class="mb-3">
                    <i class="bi bi-check-circle-fill" style="font-size: 4rem; color: var(--accent-color);"></i>
                </div>
                <h4 class="fw-bold">Pendaftaran Berhasil!</h4>
                <p class="mt-2 text-muted" id="suksesMessage"></p>
            </div>
            <div class="modal-footer justify-content-center border-0 pb-4">
                <button type="button" class="btn text-white px-4" data-bs-dismiss="modal" style="background-color: var(--accent-color);">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
function bukaModalDaftar() {
    var myModal = new bootstrap.Modal(document.getElementById('modalPendaftaran'));
    myModal.show();
}

function submitPendaftaran(e) {
    e.preventDefault();
    const btn = document.getElementById('btnSubmit');
    const form = document.getElementById('formPendaftaran');
    const alertContainer = document.getElementById('alert-container');
    
    btn.disabled = true;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Mengirim...';
    
    const formData = new FormData(form);
    
    fetch("{{ route('submit-ppdb') }}", {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if(data.success) {
            form.reset();
            // Hide the form modal
            bootstrap.Modal.getInstance(document.getElementById('modalPendaftaran')).hide();
            // Show success modal
            document.getElementById('suksesMessage').innerText = data.message;
            var successModal = new bootstrap.Modal(document.getElementById('modalSukses'));
            successModal.show();
            // Auto close after 3 seconds
            setTimeout(() => {
                successModal.hide();
            }, 3000);
        } else {
            alertContainer.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alertContainer.innerHTML = `<div class="alert alert-danger">Terjadi kesalahan sistem. Silakan coba lagi.</div>`;
    })
    .finally(() => {
        btn.disabled = false;
        btn.innerHTML = 'Kirim Pendaftaran';
    });
}
</script>

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
