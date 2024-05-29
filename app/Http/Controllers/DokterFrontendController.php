<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\User;
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
        return view('dokter.homeDokter', compact('user'));
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
