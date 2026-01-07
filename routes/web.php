<?php

// job 3 controllers
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\LemburController;
use App\Http\Controllers\LoginCon;
use App\Http\Controllers\DashboardCon;
use App\Http\Controllers\RegisterCon;

// job 2 controllers
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PamongController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;

// Job 1 controllers
Route::get('blog', function () {
    return view('job1.blog');
});

Route::get('profil', function () {
    return view('job1.profil');
});

Route::get('produk', function () {
    return view('job1.produk');
});

Route::get('kontak', function () {
    return view('job1.kontak');
});

Route::get('qhome', function () {
    return view('job1.qhome');
});


// Home route
Route::get('/', function () {
    return view('welcome');
});


// job 2
Route::get('vhome', function () {
    return view('job2.vhome');
});

Route::get('/siswa', [SiswaController::class, 'index']);

Route::get('/pamong', [PamongController::class, 'index']);

Route::get('/kelas', [KelasController::class, 'index']);

Route::get('/mapel', [MapelController::class, 'index']);

// job 3

// Home page
Route::get('home', function () {
    return view('home');
});

// READ routes
Route::get('pegawai', [PegawaiController::class, 'index']);
Route::get('golongan', [GolonganController::class, 'index']);
Route::get('gaji', [GajiController::class, 'index']);
Route::get('lembur', [LemburController::class, 'index']);

// CREATE routes
Route::get('pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('pegawai/store', [PegawaiController::class, 'store']);

Route::get('golongan/tambah', [GolonganController::class, 'tambah']);
Route::post('golongan/store', [GolonganController::class, 'store']);

Route::get('gaji/tambah', [GajiController::class, 'tambah']);
Route::post('gaji/store', [GajiController::class, 'store']);

Route::get('lembur/tambah', [LemburController::class, 'tambah']);
Route::post('lembur/store', [LemburController::class, 'store']);

// UPDATE routes
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiController::class, 'storeupdate']);

Route::get('/golongan/edit/{id}', [GolonganController::class, 'edit']);
Route::post('/golongan/update', [GolonganController::class, 'storeupdate']);

Route::get('/gaji/edit/{id}', [GajiController::class, 'edit']);
Route::post('/gaji/update', [GajiController::class, 'storeupdate']);

Route::get('/lembur/edit/{id}', [LemburController::class, 'edit']);
Route::post('/lembur/update', [LemburController::class, 'storeupdate']);

// DELETE routes

Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

Route::get('/golongan/hapus/{id}', [GolonganController::class, 'hapus']);

Route::get('/gaji/hapus/{id}', [GajiController::class, 'hapus']);

Route::get('/lembur/hapus/{id}', [LemburController::class, 'hapus']);
