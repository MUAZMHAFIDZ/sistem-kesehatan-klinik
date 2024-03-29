<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminFrontendController;
use App\Http\Controllers\AuthController;

/* 
--------------------------
^ route view pasien
^ route navbar
--------------------------
*/

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/dashboard-pasien', function () {
    return view('dashboard-pasien');
});

Route::get('/views.pasien.appointment', function () {
    return view('pasien.appointment');
});

Route::get('/views.pasien.akun', function () {
    return view('pasien.akun');
});

Route::get('/views.pasien.antrian', function () {
    return view('pasien.antrian');
});

/*
--------------------------
^ end route view pasien
--------------------------
*/


// admin dashboard
Route::get('/dashboard-admin', [AdminFrontendController::class, 'dashboard'])->middleware(['auth', 'can:Admin'])->name('admin.home');
Route::get('/dashboard-admin/jadwaldokter', [AdminFrontendController::class, 'dashboardjadwaldokter'])->middleware(['auth', 'can:Admin'])->name('admin.jadwaldok');
Route::get('/dashboard-admin/profil', [AdminFrontendController::class, 'dashboardprofil'])->middleware(['auth', 'can:Admin'])->name('admin.profil');
Route::get('/dashboard-admin/stokobat', [AdminFrontendController::class, 'dashboardstokobat'])->middleware(['auth', 'can:Admin'])->name('admin.stok');


// login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.submit');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/signup', [AuthController::class, 'register'])->name('register.submit');
Route::get('/signup', [AuthController::class, 'showRegister'])->name('login');
