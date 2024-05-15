<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Antrian;

class PasienFrontendController extends Controller
{
    public function dashboardPasien()
    {
        $user = Auth::user();
        return view('pasien.dashboardpasien', compact('user'));
    }
    public function loginPasien()
    {
        return view('auth.login');
    }
    public function registerPasien()
    {
        return view('auth.register');
    }
    public function recoveryPassword()
    {
        return view('auth.recoveryPassword');
    }

    public function showAntrian($id) 
    {
        $user = User::find($id);

        $antrian = $Antrian->antrian;

        $nama = $antrian->nama;
        $noTelepon = $antrian->no_telepon;
        $alamat = $antrian->alamat;
        $usia = $antrian->usia;
        $jenis_kelamin = $antrian->jenis_kelamin;
        $tanggal_periksa = $antrian->tanggal_periksa;
        $kategori_layanan = $antrian->kategori_layanan;

        return view('/dashboardpasien', compact('nama', 'no_telepon', 'alamat', 'usia', 'jenis_kelamin', 'tanggal_periksa', 'kategori_layanan'));
    }
}
