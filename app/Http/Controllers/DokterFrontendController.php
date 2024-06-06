<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\JadwalDokter;
use App\Models\User;
use Carbon\Carbon;
use App\Models\JadwalDokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokterFrontendController extends Controller
{
    public function dashboard() {
        $user = Auth::user();
        $user->last_activity = now();
        JadwalDokter::where('id_dokter', $user->id)->update([ 'terakhir_hadir' => date('Y-m-d') ]);
        $user->save();

        $pasienPerHari = Antrian::where('tanggal_periksa', now()->toDateString())->count();
        $pasienPerBulan = Antrian::whereMonth('tanggal_periksa', date('m'))->count();
        $pasienPerMinggu = Antrian::whereBetween('tanggal_periksa', [now()->startOfWeek()->toDateString(), now()->endOfWeek()->toDateString()])->count();

        Carbon::setlocale('id');
        $hariIni = strtolower(Carbon::now()->translatedFormat('l'));
        $dokterBertugas = JadwalDokter::where($hariIni, '!=', '00:00-00:00')->where('status', '!=', 'Cuti / Libur')->get();

        $onlineUser = User::where('last_activity', '>=', Carbon::now()->subMinutes(2))->get();
        $activeDokter = $onlineUser->filter(function ($user) {
            return $user->Authorize === "Dokter";
        });
        return view('dokter.homeDokter', compact('user', 'pasienPerHari', 'pasienPerBulan', 'pasienPerMinggu', 'hariIni', 'dokterBertugas','activeDokter'));
    }
    public function funProfilDokter() {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();
        $dokters = User::where('Authorize', 'Dokter')->get();
        return view('dokter.profilDokter', compact('user','dokters'));
    }
    public function funAntrianPasienDokter() {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();
        $data = Antrian::orderBy('tanggal_periksa')->get();
        return view('dokter.antrianPasienDok', compact('user','data'));
    }
    public function funRiwayatPasienDokter() {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();
        return view('dokter.riwayatPasienDok', compact('user'));
    }


}
