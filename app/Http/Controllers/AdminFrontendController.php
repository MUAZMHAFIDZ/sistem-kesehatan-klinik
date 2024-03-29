<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminFrontendController extends Controller
{
    public function dashboard() {
        $user = Auth::user();
        return view('admin.home', compact('user'));
    }
    public function dashboardjadwaldokter() {
        $user = Auth::user();
        $dokters = User::where('Authorize', 'Dokter')->get();
        return view('admin.jadwaldok', compact('user', 'dokters'));
    }
    public function dashboardprofil() {
        $user = Auth::user();
        return view('admin.profil', compact('user'));
    }
    public function dashboardstokobat() {
        $user = Auth::user();
        return view('admin.stokobat', compact('user'));
    }
    public function dashboarddatadokter() {
        $user = Auth::user();
        $dokters = User::where('Authorize', 'Dokter')->get();
        return view('admin.datadokter', compact('user', 'dokters'));
    }
    public function dashboardantrian() {
        $user = Auth::user();
        return view('admin.antrian', compact('user'));
    }
    public function dashboarddatapasien() {
        $user = Auth::user();
        return view('admin.datapasien', compact('user'));
    }
    public function dashboardformpasien() {
        $user = Auth::user();
        return view('admin.formpasien', compact('user'));
    }
}
