<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;

// ---------- PAGES ----------
Route::view('/',       'pages.beranda');
Route::view('/galery', 'pages.galery');
Route::view('/job',    'pages.job');
Route::view('/blog',   'pages.blog');

// Halaman layanan (SEO friendly)
Route::view('/layanan/virtual-office', 'pages.layanan.virtualo')->name('layanan.virtual');
Route::view('/layanan/private-office', 'pages.layanan.privateo')->name('layanan.private');
Route::view('/layanan/shared-office', 'pages.layanan.sharedo')->name('layanan.shared');
Route::view('/layanan/pembuatan-pt-cv', 'pages.layanan.jasapt')->name('layanan.jasapt');
Route::view('/layanan/paket-lengkap', 'pages.layanan.pakethemat')->name('layanan.paket');

Route::view('/kritik-saran', 'components.home.hfive')->name('kritik-saran');

// Kirim saran (POST)
Route::post('/suggestion', [SuggestionController::class, 'send'])
    ->name('suggestion.send');

// routes/web.php
Route::view('/jobs', 'pages.job')->name('jobs');

//Navbar
Route::get('/layanan/virtual-office', function () {
    return view('pages.layanan.virtualo');
})->name('layanan.virtualo');

Route::get('/layanan/private-office', function () {
    return view('pages.layanan.privateo');
})->name('layanan.privateo');

Route::get('/layanan/shared-office', function () {
    return view('pages.layanan.sharedo');
})->name('layanan.sharedo');

Route::get('/layanan/jasa-pt', function () {
    return view('pages.layanan.jasapt');
})->name('layanan.jasapt');

Route::get('/layanan/paket-hemat', function () {
    return view('pages.layanan.pakethemat');
})->name('layanan.pakethemat');

// ---------- BOOKING ----------
Route::post('/order', [OrderController::class, 'send'])->name('order.send');

// Halaman Lowongan
Route::get('/jobs', function () {
    return view('pages.job');
})->name('job');

// Form Lamaran
Route::get('/job/apply', [JobApplicationController::class, 'showForm'])->name('job.apply');
Route::post('/job/submit', [JobApplicationController::class, 'submitForm'])->name('job.submit');

// ---------- DASHBOARD ADMIN ----------
// Dashboard utama
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    // CRUD Berita
    Route::resource('admin/dashboard/berita', BeritaController::class);

    // CRUD Job
    Route::resource('admin/dashboard/job', JobController::class);

    // CTA CRUD Dashboard
    Route::get('admin/dashboard/crud-berita', [BeritaController::class, 'index'])->name('crud.berita');
    Route::get('admin/dashboard/crud-job', [JobController::class, 'index'])->name('crud.job');
});
// Login
Route::get('/login',  [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login',  [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
