<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

// admin dashboard
Route::get('/dashboard-admin', [FrontendController::class, 'dashboard'])->middleware('auth')->name('admin.home');
Route::get('/dashboard-admin/jadwaldokter', [FrontendController::class, 'dashboardjadwaldokter'])->middleware('auth')->name('admin.jadwaldok');
Route::get('/dashboard-admin/profil', [FrontendController::class, 'dashboardprofil'])->middleware('auth')->name('admin.profil');
Route::get('/dashboard-admin/stokobat', [FrontendController::class, 'dashboardstokobat'])->middleware('auth')->name('admin.stok');


// login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.submit');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/signup', [AuthController::class, 'register'])->name('register.submit');
Route::get('/signup', [AuthController::class, 'showRegister'])->name('login');