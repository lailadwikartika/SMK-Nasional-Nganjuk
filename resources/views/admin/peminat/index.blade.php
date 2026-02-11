<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Daftar Peminat - SMK Nasional Nganjuk</title>
    <link href="{{ asset('assets/logobaru.png') }}" rel="icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Nunito:300,400,600,700|Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <nav class="header-nav ms-auto">
            <a class="nav-link nav-profile d-flex align-items-center pe-3" href="#" data-bs-toggle="dropdown">
                <img src="{{ Auth::user()->foto ? asset('storage/' . Auth::user()->foto) : asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li><a class="dropdown-item d-flex align-items-center" href="{{ route('profile') }}"><i class="bi bi-person"></i><span>Profile</span></a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">@csrf<button type="submit" class="dropdown-item d-flex align-items-center"><i class="bi bi-box-arrow-right"></i><span>Keluar</span></button></form>
                </li>
            </ul>
        </nav>
    </header>

    <!-- ======= Sidebar ======= -->
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
            <h1>Daftar Peminat</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-beranda') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Peminat</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Calon Peserta Didik</h5>
                            <div class="table-responsive">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <th>Jalur Pendaftaran</th>
                                            <th>Asal Sekolah</th>
                                            <th>No. HP</th>
                                            <th>Tgl. Daftar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($peminat as $p)
                                        <tr>
                                            <td><strong>{{ $p->nama_lengkap }}</strong></td>
                                            <td>
                                                <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">
                                                    {{ $p->jalur->nama_jalur ?? 'Umum / Belum Pilih' }}
                                                </span>
                                            </td>
                                            <td>{{ $p->asal_sekolah }}</td>
                                            <td>{{ $p->no_hp }}</td>
                                            <td>{{ $p->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                <a href="{{ route('peminat.show', $p->id_peminat) }}" class="btn btn-sm btn-info text-white">
                                                    <i class="bi bi-eye"></i> Detail
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Belum ada data peminat.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>

</body>

</html>
