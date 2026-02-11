<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KepalaSekolahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\BkkController; 
use App\Http\Controllers\PbdpController;
use App\Http\Controllers\InformasiUmumController;
use App\Http\Controllers\PeminatController;


// Public
Route::get('/visi-misi', [InformasiUmumController::class, 'visiMisi'])->name('visi-misi');
Route::get('/sejarah-sekolah', [InformasiUmumController::class, 'sejarahSekolah'])->name('sejarah-sekolah');

Route::get('/lokasi', function () {
    return view('user.lokasi');
})->name('lokasi');
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/data-kepala-sekolah', [BerandaController::class, 'data_kepalasekolah'])->name('data-kepala-sekolah');
Route::get('/data-guru', [BerandaController::class, 'data_guru'])->name('data-guru');
Route::get('/data-jurusan', [BerandaController::class, 'data_jurusan'])->name('data-jurusan');
Route::get('/data-fasilitas', [BerandaController::class, 'data_fasilitas'])->name('data-fasilitas');
Route::get('/data-struktur-organisasi', [InformasiUmumController::class, 'strukturOrganisasi'])->name('data-struktur-organisasi');
Route::get('/data-ekstrakurikuler', [BerandaController::class, 'data_ekstrakurikuler'])->name('data-ekstrakurikuler');
Route::get('/data-bkk', [BerandaController::class, 'data_bkk'])->name('data-bkk');
Route::get('/data-pbdb', [BerandaController::class, 'data_pbdb'])->name('data-pbdb');

// Route untuk pendaftaran PPDB via email
Route::post('/submit-ppdb', [PeminatController::class, 'submitPendaftaran'])
    ->name('submit-ppdb');

// Auth
Route::get('/login',  [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// lupa katasandi
Route::get('/lupa-kata-sandi', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/lupa-kata-sandi', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');
// Admin
Route::middleware('auth')->group(function () {
    Route::get('/admin-beranda', [BerandaController::class, 'adminBeranda'])->name('admin-beranda');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::match(['POST', 'PATCH'], '/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');

    Route::resource('kepala-sekolah', KepalaSekolahController::class)
    ->parameters(['kepala-sekolah' => 'kepala_sekolah'])
    ->names('kepala-sekolah');

    Route::resource('guru', GuruController::class)
    ->parameters(['guru' => 'guru'])
    ->names('guru');
Route::resource('jurusan', JurusanController::class)
    ->parameters(['jurusan' => 'jurusan'])
    ->names('jurusan');
    Route::resource('fasilitas', FasilitasController::class)
    ->parameters(['fasilitas' => 'fasilitas'])
    ->names('fasilitas');
     Route::resource('informasi-umum', InformasiUmumController::class)
    ->parameters(['informasi-umum' => 'informasi_umum'])
    ->names('informasi-umum');
    Route::resource('ekstrakurikuler', EkstrakurikulerController::class)
    ->parameters(['ekstrakurikuler' => 'ekstrakurikuler'])
    ->names('ekstrakurikuler');

    Route::resource('bkk', BkkController::class)
    ->parameters(['bkk' => 'bkk'])
    ->names('bkk')
    ->except(['show']);
    Route::resource('pbdp', PbdpController::class)
    ->parameters(['pbdp' => 'pbdp'])
    ->names('pbdp');
    Route::resource('peminat', PeminatController::class)
    ->parameters(['peminat' => 'peminat'])
    ->names('peminat');
});

Route::get('/bkk/{bkk}', [BkkController::class, 'show'])->name('bkk.show');
