<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Kata Sandi - SMK Nasional Nganjuk</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/logobaru.png') }}" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background: #800000;
            background-image: radial-gradient(#9a1d1d 15%, transparent 16%),
                radial-gradient(#9a1d1d 15%, transparent 16%);
            background-size: 60px 60px;
            background-position: 0 0, 30px 30px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .login-wrapper {
            width: 100%;
            max-width: 450px;
            padding: 15px;
        }

        .logo-area {
            text-align: center;
            margin-bottom: 30px;
            color: white;
        }

        .logo-circle {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            padding: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .logo-circle img {
            max-width: 100%;
            height: auto;
        }

        .main-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .sub-title {
            font-size: 14px;
            opacity: 0.9;
        }

        .card-custom {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }

        .card-header-custom {
            background-color: #FFC107;
            padding: 20px;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #333;
            border-bottom: none;
        }

        .card-body-custom {
            background: white;
            padding: 30px;
        }

        .form-label {
            font-size: 14px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        .form-control {
            border-radius: 8px;
            padding: 10px 15px;
            border: 1px solid #ced4da;
        }
        
        .form-control:focus {
            border-color: #800000;
            box-shadow: 0 0 0 0.25rem rgba(128, 0, 0, 0.25);
        }

        .btn-custom-red {
            background-color: #D30000;
            border-color: #D30000;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            padding: 12px;
            width: 100%;
            transition: all 0.3s;
        }

        .btn-custom-red:hover {
            background-color: #b00000;
            border-color: #b00000;
        }

        .back-link {
            text-align: center;
            margin-top: 25px;
        }

        .back-link a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: opacity 0.2s;
            text-shadow: 0 1px 2px rgba(0,0,0,0.3);
        }

        .back-link a:hover {
            opacity: 0.8;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-wrapper">
        <div class="logo-area">
            <div class="logo-circle">
                <img src="{{ asset('assets/logobaru.png') }}" alt="Logo">
            </div>
            <div class="main-title">Reset Password</div>
            <div class="sub-title">SMK Nasional Nganjuk</div>
        </div>

        <div class="card card-custom">
            <div class="card-header-custom">
                Lupa Kata Sandi
            </div>
            <div class="card-body card-body-custom">
                <p class="text-center small mb-4 text-muted">Masukkan email yang terdaftar untuk melakukan reset password</p>

                @if (session('status'))
                    <div class="alert alert-success fs-6" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    
                    <div class="mb-4">
                        <label for="email" class="form-label"><i class="bi bi-envelope me-1"></i> Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               name="email" id="email" value="{{ old('email') }}" 
                               placeholder="Masukkan email terdaftar" required>
                        @error('email')
                            <div class="text-danger small mt-1">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-custom-red">Reset Password</button>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('login') }}" class="text-decoration-none small text-muted">
                            <i class="bi bi-arrow-left me-1"></i> Kembali ke Login
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="back-link">
            <a href="{{ url('/') }}">
                &larr; Kembali ke Beranda
            </a>
        </div>
    </div>
</body>

</html>