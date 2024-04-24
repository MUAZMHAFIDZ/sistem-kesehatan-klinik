<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
