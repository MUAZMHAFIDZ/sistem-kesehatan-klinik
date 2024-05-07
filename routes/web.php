<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminFrontendController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterFrontendController;
use App\Http\Controllers\KelolaRumahSakitController;
use App\Http\Controllers\PasienFrontendController;
use App\Http\Controllers\ProfileDokterController;
use App\Http\Controllers\AdminPasienController;

// Route::get('/fooconcon', function () {
//     Artisan::call('storage:link');
// });
// Route::get('/fooconconmigratefresh', function () {
//     Artisan::call('migrate:fresh');
// });
// Route::get('/fooconconmigrate', function () {
//     Artisan::call('migrate');
// });


use App\Http\Controllers\ProfileDokterController;
use App\Http\Controllers\AdminPasienController;


/* 
--------------------------
^ route pages pasien start
--------------------------
*/

Route::get('/', function () {
    return view('pasien.landingpage');
});

Route::get('/dashboardpasien', [
    PasienFrontendController::class, 'dashboardPasien'
])->middleware('auth')->name('/dashboardpasien');

Route::get('auth.login', [
    PasienFrontendController::class, 'loginPasien'
])->middleware('guest')->name('/login');

Route::get('/register', [
    PasienFrontendController::class, 'registerPasien'
])->middleware('guest')->name('/register');

/* 
--------------------------
^ route pages pasien end
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
Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('forgot-password');
Route::post('/forgot-password-act', [AuthController::class, 'forgot_password_act'])->name('forgot-password-act');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/signup', [AuthController::class, 'register'])->name('register.submit');
Route::get('/signup', [AuthController::class, 'showRegister'])->name('login');

Route::get('/checklogin', [AuthController::class, 'statusOnline'])->name('logincheck.check');


/* 
--------------------------
^ recovery password start
--------------------------
*/
Route::get('/recoveryPassword', [
    PasienFrontendController::class, 'recoveryPassword'
])->middleware('guest')->name('recoveryPassword');

Route::post('/recoveryPassword', [
    AuthController::class, 'processRecoveryPassword'
])->middleware('guest')->name('proccesRecoveryPassword');
/* 
--------------------------
^ recovery password end
--------------------------
*/


// dokter dashboard
Route::get('/homeDokter', [DokterFrontendController::class, 'dashboard'])->middleware(['auth', 'can:Dokter'])->name('dokter.homeDokter');
Route::get('/profilDokter', [DokterFrontendController::class, 'funProfilDokter'])->middleware(['auth', 'can:Dokter'])->name('dokter.profilDokter');
Route::get('/antrianPasienDok', [DokterFrontendController::class, 'funAntrianPasienDokter'])->middleware(['auth', 'can:Dokter'])->name('dokter.antrianPasienDok');
Route::get('/riwayatPasienDok', [DokterFrontendController::class, 'funRiwayatPasienDokter'])->middleware(['auth', 'can:Dokter'])->name('dokter.riwayatPasienDok');

Route::post('/user/profile/update', [ProfileDokterController::class, 'UpdateProfile'])->name('user.profile.update');


//route antrian
Route::post('/dashboard-admin/formantrian', [AdminPasienController::class, 'buatAntrian'])->name('admin.formpasien.submit');
Route::get('/antrian/{id}/edit', [AdminPasienController::class, 'edit'])->name('antrian.edit');
Route::put('/antrian/{id}', [AdminPasienController::class, 'update'])->name('antrian.update');
Route::delete('/antrian/{id}', [AdminPasienController::class, 'destroy'])->name('antrian.destroy');

//profil
Route::put('/dashboard-admin/profil/update/{id}', [KelolaRumahSakitController::class, 'updateProfilnya'])->name('admin.profil.update');

