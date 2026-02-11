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
                <a class="nav-link" href="{{ route('fasilitas.index') }}">
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
                <a class="nav-link collapsed" href="{{ route('pbdp.index') }}">
                    <i class="bi bi-person-plus"></i> <!-- PBDB -->
                    <span>PBDB</span>
                </a>
            </li><!-- End PBDB Nav -->
        </ul>

    </aside><!-- End Sidebar-->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Edit Fasilitas</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-beranda') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('fasilitas.index') }}">Fasilitas</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Form masih ada yang salah:</strong>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Fasilitas</h5>

                            <form action="{{ route('fasilitas.update', $fasilitas->id_fasilitas) }}" method="POST"
                                enctype="multipart/form-data" novalidate>
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <label for="nama_fasilitas" class="col-sm-3 col-form-label">Nama Fasilitas</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="nama_fasilitas" name="nama_fasilitas"
                                            class="form-control @error('nama_fasilitas') is-invalid @enderror"
                                            value="{{ old('nama_fasilitas', $fasilitas->nama_fasilitas) }}">
                                        @error('nama_fasilitas')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="keterangan" name="keterangan"
                                            class="form-control @error('keterangan') is-invalid @enderror"
                                            value="{{ old('keterangan', $fasilitas->keterangan) }}">
                                        @error('keterangan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Foto</label>
                                    <div class="col-sm-9">
                                        @if ($fasilitas->foto)
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $fasilitas->foto) }}" alt="Foto Lama"
                                                width="100" class="rounded shadow">
                                        </div>
                                        @endif
                                        <input type="file" id="foto" name="foto"
                                            class="form-control @error('foto') is-invalid @enderror"
                                            accept=".jpg,.jpeg,.png,.webp">
                                        @error('foto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-end">
                                    <a href="{{ route('fasilitas.index') }}"
                                        class="btn btn-outline-secondary">Batal</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <!-- ======= End Main ======= -->
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

</body>

</html>
