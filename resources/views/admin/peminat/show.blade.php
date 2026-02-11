<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Detail Peminat - SMK Nasional Nganjuk</title>
    <link href="{{ asset('assets/logobaru.png') }}" rel="icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Nunito:300,400,600,700|Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between"><i class="bi bi-list toggle-sidebar-btn"></i></div>
    </header>

    <aside id="sidebar" class="sidebar">
        <div class="sidebar-logo">
            <img src="{{ asset('assets/logobaru.png') }}" alt="Logo">
            <span>SMK Nasional</span>
        </div>
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item"><a class="nav-link collapsed" href="{{ route('admin-beranda') }}"><i class="bi bi-speedometer2"></i><span>Dashboard</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('peminat.index') }}"><i class="bi bi-people"></i><span>Daftar Peminat</span></a></li>
            <li class="nav-item"><a class="nav-link collapsed" href="{{ route('pbdp.index') }}"><i class="bi bi-person-plus"></i><span>Kelola Jalur PPDB</span></a></li>
        </ul>
    </aside>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Detail Peminat</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-beranda') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('peminat.index') }}">Peminat</a></li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card p-4 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fs-4 mb-4 border-bottom pb-3">Profil Calon Siswa</h5>
                            
                            <div class="row mb-4">
                                <div class="col-lg-3 col-md-4 label fw-bold text-muted">Nama Lengkap</div>
                                <div class="col-lg-9 col-md-8 fs-5 fw-bold text-dark">{{ $peminat->nama_lengkap }}</div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-3 col-md-4 label fw-bold text-muted">Jalur Dipilih</div>
                                <div class="col-lg-9 col-md-8">
                                    <span class="badge {{ $peminat->jalur ? 'bg-danger' : 'bg-secondary' }} p-2 px-3">
                                        {{ $peminat->jalur->nama_jalur ?? 'Umum / Belum Pilih Jalur' }}
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-3 col-md-4 label fw-bold text-muted">Asal Sekolah</div>
                                <div class="col-lg-9 col-md-8">{{ $peminat->asal_sekolah }}</div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-3 col-md-4 label fw-bold text-muted">No. HP / WA</div>
                                <div class="col-lg-9 col-md-8">
                                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $peminat->no_hp) }}" target="_blank" class="btn btn-success btn-sm rounded-pill px-3">
                                        <i class="bi bi-whatsapp me-2"></i>{{ $peminat->no_hp }}
                                    </a>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-3 col-md-4 label fw-bold text-muted">Alamat</div>
                                <div class="col-lg-9 col-md-8">{{ $peminat->alamat }}</div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 label fw-bold text-muted">Terdaftar Pada</div>
                                <div class="col-lg-9 col-md-8"><i class="bi bi-calendar3 me-2 text-primary"></i>{{ $peminat->created_at->format('d F Y - H:i') }}</div>
                            </div>

                            <div class="mt-5 border-top pt-4">
                                <a href="{{ route('peminat.index') }}" class="btn btn-secondary rounded-pill px-4">
                                    <i class="bi bi-arrow-left me-2"></i>Kembali ke Daftar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
