<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokterFrontendController extends Controller
{
    public function dashboard() {
        $user = Auth::user();
        return view('dokter.homeDokter', compact('user'));
    }
    public function funProfilDokter() {
        $user = Auth::user();
        return view('dokter.profilDokter', compact('user'));
    }
    public function funAntrianPasienDokter() {
        $user = Auth::user();
        return view('dokter.antrianPasienDok', compact('user'));
    }
    public function funRiwayatPasienDokter() {
        $user = Auth::user();
        return view('dokter.riwayatPasienDok', compact('user'));
    }

}
