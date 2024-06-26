<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Obat;
use App\Models\JadwalDokter;
use Carbon\Carbon;
use App\Models\Antrian;
use App\Models\Profil;
use App\Models\RekamMedis;
use App\Models\KehadiranDokter;

class AdminFrontendController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();
        $onlineUser = User::where('last_activity', '>=', Carbon::now()->subMinutes(2))->get();

        $activeUser = $onlineUser->filter(function ($user) {
            return $user->Authorize === "User";
        });
        $activeDokter = $onlineUser->filter(function ($user) {
            return $user->Authorize === "Dokter";
        });
        $activeAdmin = $onlineUser->filter(function ($user) {
            return $user->Authorize === "Admin";
        });

        Carbon::setlocale('id');
        $hariIni = strtolower(Carbon::now()->translatedFormat('l'));
        $dokterBertugas = JadwalDokter::where($hariIni, '!=', '00:00-00:00')->where('status', '!=', 'Cuti / Libur')->get();

        $activeUser = $onlineUser->filter(function ($user) {
            return $user->Authorize === "User";
        });
        $activeDokter = $onlineUser->filter(function ($user) {
            return $user->Authorize === "Dokter";
        });
        $activeAdmin = $onlineUser->filter(function ($user) {
            return $user->Authorize === "Admin";
        });

        Carbon::setlocale('id');
        $hariIni = strtolower(Carbon::now()->translatedFormat('l'));
        $dokterBertugas = JadwalDokter::where($hariIni, '!=', '00:00-00:00')->where('status', '!=', 'Cuti / Libur')->get();

        $activeUser = $onlineUser->filter(function ($user) {
            return $user->Authorize === "User";
        });
        $activeDokter = $onlineUser->filter(function ($user) {
            return $user->Authorize === "Dokter";
        });
        $activeAdmin = $onlineUser->filter(function ($user) {
            return $user->Authorize === "Admin";
        });

        $pasienHariIni = Antrian::where('tanggal_periksa', now()->toDateString())->get();
        $pasienPerHari = Antrian::where('tanggal_periksa', now()->toDateString())->count();
        $pasienPerBulan = Antrian::whereMonth('tanggal_periksa', date('m'))->count();
        $pasienPerMinggu = Antrian::whereBetween('tanggal_periksa', [now()->startOfWeek()->toDateString(), now()->endOfWeek()->toDateString()])->count();

        return view('admin.home', compact('user', 'activeAdmin', 'activeUser', 'activeDokter', 'dokterBertugas', 'hariIni', 'pasienHariIni', 'pasienPerHari', 'pasienPerMinggu', 'pasienPerBulan', ));
    }
    public function dashboardjadwaldokter()
    {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();

        $dokterjadwal = JadwalDokter::all();
        return view('admin.jadwaldok', compact('user', 'dokterjadwal'));
    }
    public function dashboardprofil()
    {
        $user = Auth::user();
        $user->last_activity = now();
        $pendidikan = $user->riwayat_pendidikan;
        if (!$pendidikan) {
            $pendidikan = json_encode(['Tidak ada']);
            $user->riwayat_pendidikan = $pendidikan;
        }
        $user->save();
        $onlineUser = User::where('last_activity', '>=', Carbon::now()->subMinutes(2))->get();

        $activeUser = $onlineUser->filter(function ($user) {
            return $user->Authorize === "User";
        });
        $activeDokter = $onlineUser->filter(function ($user) {
            return $user->Authorize === "Dokter";
        });
        $activeAdmin = $onlineUser->filter(function ($user) {
            return $user->Authorize === "Admin";
        });
        $admin = User::where('Authorize', 'Admin')->get();


        return view('admin.profil', compact('user', 'activeAdmin', 'admin'));
    }
    public function dashboardstokobat()
    {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();
        $obat = Obat::all();
        return view('admin.stokobat', compact('user', 'obat'));
    }
    public function dashboarddatadokter()
    {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();
        $dokters = User::where('Authorize', 'Dokter')->get();
        return view('admin.datadokter', compact('user', 'dokters'));
    }
    public function dashboardantrian()
    {
        $user = Auth::user();
        $dokters = User::where('Authorize', 'Dokter')->get();
        $user->last_activity = now();
        $user->save();
        $data = Antrian::orderBy('tanggal_periksa')->where('status', false)->get();
        return view('admin.antrian', compact('user', 'data', 'dokters'));
    }
    public function dashboarddatapasien()
    {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();
        return view('admin.datapasien', compact('user'));
    }
    public function dashboardformpasien()
    {
        $user = Auth::user();
        $dokters = User::where('Authorize', 'Dokter')->get();
        $user->last_activity = now();
        $user->save();
        return view('admin.formpasien', compact('user','dokters'));
    }

    public function rekammedis() {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();
        $sekarang = Carbon::now();
        $awalMinggu = $sekarang->startOfWeek()->format('Y-m-d');
        $akhirMinggu = $sekarang->endOfWeek()->format('Y-m-d');

        $rekammedis = RekamMedis::whereBetween('dibuat', [$awalMinggu, $akhirMinggu])->get();
        return view('admin.rekammedis', compact('user', 'rekammedis'));
    }
}
