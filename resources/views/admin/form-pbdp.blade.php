<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">  
    <title>Admin SMK Nasional Nganjuk</title>
    <meta content="" name="description">
    <meta content="" name="keywords">   
    <!-- Favicons -->
    <link href="{{ asset('assets/logobaru.png') }}" rel="icon">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    {{-- Vendor CSS --}}
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    {{-- Template CSS --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

                <div class="d-flex align-items-center justify-content-between">
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <a class="nav-link nav-profile d-flex align-items-center pe-3" href="#" data-bs-toggle="dropdown">
                <img src="{{ Auth::user()->foto ? asset('storage/' . Auth::user()->foto) : asset('assets/img/profile-img.jpg') }}"
                    alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('profile') }}">
                        <i class="bi bi-person"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item d-flex align-items-center">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Keluar</span>
                        </button>
                    </form>
                </li>
            </ul><!-- End Profile Dropdown Items -->
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <div class="sidebar-logo d-flex align-items-center justify-content-between px-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/logobaru.png') }}" alt="Logo">
                <span>SMK Nasional Nganjuk</span>
            </div>
            <i class="bi bi-list toggle-sidebar-btn d-xl-none"></i>
        </div>

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin-beranda') }}">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('kepala-sekolah.index') }}">
                    <i class="bi bi-person-badge"></i>
                    <span>Data Kepala Sekolah</span>
                </a>
            </li><!-- End Kepala Sekolah Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('guru.index') }}">
                    <i class="bi bi-people"></i>
                    <span>Data Guru</span>
                </a>
            </li><!-- End Data Guru Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('jurusan.index') }}">
                    <i class="bi bi-book"></i>
                    <span>Data Jurusan</span>
                </a>
            </li><!-- End Data Jurusan Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('fasilitas.index') }}">
                    <i class="bi bi-building"></i> <!-- Fasilitas -->
                    <span>Fasilitas</span>
                </a>
            </li><!-- End Fasilitas Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('informasi-umum.index') }}">
                    <i class="bi bi-info-circle"></i> <!-- Informasi Umum -->
                    <span>Informasi Umum</span>
                </a>
            </li><!-- End Informasi Umum Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('bkk.index') }}">
                    <i class="bi bi-briefcase"></i> <!-- BKK -->
                    <span>BKK</span>
                </a>
            </li><!-- End BKK Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('ekstrakurikuler.index') }}">
                    <i class="bi bi-palette"></i>
                    <span>Ekstrakurikuler</span>
                </a>
            </li><!-- End Ekstrakurikuler Nav -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pbdp.index') }}">
                    <i class="bi bi-person-plus"></i> <!-- PBDB -->
                    <span>PPDB</span>
                </a>
            </li><!-- End PPDB Nav -->
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Formulir Data PPDB</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-beranda') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('pbdp.index') }}">PPDB</a></li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    {{-- Flash success --}}
                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    {{-- Error summary --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Terdapat kesalahan pada formulir:</strong>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Jalur PPDB</h5>

                            {{-- FORM CREATE --}}
                            <form action="{{ route('pbdp.store') }}" method="POST"
                                enctype="multipart/form-data" novalidate>
                                @csrf

                                <div class="row mb-3">
                                    <label for="nama_jalur" class="col-sm-3 col-form-label">Nama Jalur</label>
                                    <div class="col-sm-9">
                                        {{-- Asumsi $jalurPendaftaran dikirim dari controller --}}
                                        @php
                                            // Data dummy jika variabel tidak ada. Idealnya, ini dari controller.
                                            $jalurPendaftaran = $jalurPendaftaran ?? collect([
                                                (object)['id' => 1, 'nama_jalur' => 'Jalur Prestasi'],
                                                (object)['id' => 2, 'nama_jalur' => 'Jalur Reguler'],
                                                (object)['id' => 3, 'nama_jalur' => 'Jalur Afirmasi'],
                                            ]);
                                        @endphp
                                        <input type="text" id="nama_jalur" name="nama_jalur"
                                            class="form-control @error('nama_jalur') is-invalid @enderror"
                                            value="{{ old('nama_jalur') }}" placeholder="Ketik nama jalur baru atau pilih di bawah">
                                        @error('nama_jalur')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                        <div class="mt-2">
                                            <small class="text-muted">Atau pilih dari jalur yang ada (klik untuk memilih, klik 'x' untuk menghapus):</small>
                                            <div class="d-flex flex-wrap gap-2 mt-1">
                                                @forelse ($jalurPendaftaran as $jalur)
                                                    <span class="badge bg-secondary d-flex align-items-center">
                                                        <span class="me-2" style="cursor: pointer;" onclick="document.getElementById('nama_jalur').value = '{{ $jalur->nama_jalur }}'">{{ $jalur->nama_jalur }}</span>
                                                        <i class="bi bi-x-circle" style="cursor: pointer;" onclick="if(confirm('Yakin ingin menghapus jalur \'{{ $jalur->nama_jalur }}\'?')) { document.getElementById('delete-jalur-{{ $jalur->id }}').submit(); }"></i>
                                                    </span>
                                                @empty
                                                    <small class="text-muted">Belum ada jalur pendaftaran.</small>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                

                                <div class="row mb-3">
                                    <label for="tanggal_buka" class="col-sm-3 col-form-label">Tanggal Buka</label>
                                    <div class="col-sm-9">
                                        <input type="date" id="tanggal_buka" name="tanggal_buka"
                                            class="form-control @error('tanggal_buka') is-invalid @enderror"
                                            value="{{ old('tanggal_buka') }}">
                                        @error('tanggal_buka')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="tanggal_tutup" class="col-sm-3 col-form-label">Tanggal Tutup</label>
                                    <div class="col-sm-9">
                                        <input type="date" id="tanggal_tutup" name="tanggal_tutup"
                                            class="form-control @error('tanggal_tutup') is-invalid @enderror"
                                            value="{{ old('tanggal_tutup') }}">
                                        @error('tanggal_tutup')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="persyaratan_khusus" class="col-sm-3 col-form-label">Persyaratan Khusus</label>
                                    <div class="col-sm-9">
                                        <textarea id="persyaratan_khusus" name="persyaratan_khusus" class="form-control @error('persyaratan_khusus') is-invalid @enderror" rows="4" placeholder="Masukkan persyaratan khusus jalur pendaftaran">{{ old('persyaratan_khusus') }}</textarea>
                                        @error('persyaratan_khusus')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-end">
                                    <a href="{{ route('pbdp.index') }}" class="btn btn-outline-secondary">Batal</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                            {{-- END FORM --}}

                            {{-- Hidden forms for deletion --}}
                            @foreach ($jalurPendaftaran as $jalur)
                                <form id="delete-jalur-{{ $jalur->id }}" action="{{ route('pbdp.destroy', $jalur->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
    {{-- Vendor JS --}}
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    {{-- Template JS --}}
    {{-- main.js is assumed to be moved to the head section as per instruction --}}
</body>

</html>
