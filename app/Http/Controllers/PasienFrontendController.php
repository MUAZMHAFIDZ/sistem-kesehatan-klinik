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
    // public function buatAntrian()
    // {

    //     $Antrian = Antrian::where('nama', 'tyo');
    //     return view('pasien.dashboardpasien', compact('Antrian'));
    // }
}
