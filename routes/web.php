<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminFrontendController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterFrontendController;
use App\Http\Controllers\KelolaRumahSakitController;

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


// admin dashboard get
Route::get('/dashboard-admin', [AdminFrontendController::class, 'dashboard'])->middleware(['auth', 'can:Admin'])->name('admin.home');
Route::get('/dashboard-admin/jadwaldokter', [AdminFrontendController::class, 'dashboardjadwaldokter'])->middleware(['auth', 'can:Admin'])->name('admin.jadwaldok');
Route::get('/dashboard-admin/profil', [AdminFrontendController::class, 'dashboardprofil'])->middleware(['auth', 'can:Admin'])->name('admin.profil');
Route::get('/dashboard-admin/stokobat', [AdminFrontendController::class, 'dashboardstokobat'])->middleware(['auth', 'can:Admin'])->name('admin.stok');
Route::get('/dashboard-admin/antrian', [AdminFrontendController::class, 'dashboardantrian'])->middleware(['auth', 'can:Admin'])->name('admin.antrian');
Route::get('/dashboard-admin/data-pasien', [AdminFrontendController::class, 'dashboarddatapasien'])->middleware(['auth', 'can:Admin'])->name('admin.datapasien');
Route::get('/dashboard-admin/datadokter', [AdminFrontendController::class, 'dashboarddatadokter'])->middleware(['auth', 'can:Admin'])->name('admin.datadokter');
Route::get('/dashboard-admin/formantrian', [AdminFrontendController::class, 'dashboardformpasien'])->middleware(['auth', 'can:Admin'])->name('admin.formpasien');

// admin kelola dokter
// admin dashboard post
Route::post('/dashboard-admin/datadokter', [KelolaRumahSakitController::class, 'registerDokter'])->name('registerdokter.submit');
// admin delete
Route::delete('/dashboard-admin/datadokter/{id}', [KelolaRumahSakitController::class, 'deleteDokter'])->name('deletedokter.submit');
// admin put
Route::put('/dashboard-admin/datadokter/{id}', [KelolaRumahSakitController::class, 'editDokter'])->name('editdokter.submit');
// admin jadwal dokter
Route::put('/dashboard-admin/jadwaldokter/{id}', [KelolaRumahSakitController::class, 'editJadwalDokter'])->name('editjadwaldokter.jadwal');

//admin kelola obat
// admin dashboard post
Route::post('/dashboard-admin/stokobat', [KelolaRumahSakitController::class, 'tambahObat'])->name('tambahobat.submit');
// admin delete
Route::delete('/dashboard-admin/stokobat/{id}', [KelolaRumahSakitController::class, 'deleteObat'])->name('deleteobat.submit');
// // admin put
Route::put('/dashboard-admin/stokobat/{id}', [KelolaRumahSakitController::class, 'editObat'])->name('editobat.submit');


// login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.submit');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/signup', [AuthController::class, 'register'])->name('register.submit');
Route::get('/signup', [AuthController::class, 'showRegister'])->name('login');

Route::get('/checklogin', [AuthController::class, 'statusOnline'])->name('logincheck.check');


// dokter dashboard
Route::get('/homeDokter', [DokterFrontendController::class, 'dashboard'])->middleware(['auth', 'can:Dokter'])->name('dokter.homeDokter');
Route::get('/profilDokter', [DokterFrontendController::class, 'funProfilDokter'])->middleware(['auth', 'can:Dokter'])->name('dokter.profilDokter');
Route::get('/antrianPasienDok', [DokterFrontendController::class, 'funAntrianPasienDokter'])->middleware(['auth', 'can:Dokter'])->name('dokter.antrianPasienDok');
Route::get('/riwayatPasienDok', [DokterFrontendController::class, 'funRiwayatPasienDokter'])->middleware(['auth', 'can:Dokter'])->name('dokter.riwayatPasienDok');
