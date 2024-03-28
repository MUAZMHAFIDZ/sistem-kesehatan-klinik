<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function dashboard() {
        return view('dashboard-admin');
    }
    public function dashboardjadwaldokter() {
        return view('admin.jadwaldok');
    }
    public function dashboardprofil() {
        return view('admin.profil');
    }
    public function dashboardstokobat() {
        return view('admin.stokobat');
    }
    public function dashboardantrian() {
        return view('admin.antrian');
    }
    public function dashboardformpasien() {
        return view('admin.formpasien');
    }
}
