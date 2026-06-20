<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AuthController;
use App\Models\Guru; 

// Halaman Depan
Route::get('/', function () {
    return view('welcome');
});

// Route untuk Halaman Publik Daftar Guru
Route::get('/profil-guru', function () {
    $gurus = Guru::all(); 
    return view('profil-guru', compact('gurus'));
});

// Route Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

// Route Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Dashboard 
Route::get('/dashboard', function () {
    $totalGuru = Guru::count(); 
    return view('dashboard', compact('totalGuru'));
});

// Route CRUD Data Guru Admin
Route::resource('guru', GuruController::class);

Route::get('/profil-sekolah', function () {
    return view('profil-sekolah');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/kontak', function () {
    return view('kontak');
});