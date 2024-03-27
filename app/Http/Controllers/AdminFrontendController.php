<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminFrontendController extends Controller
{
    public function dashboard() {
        $user = Auth::user();
        return view('dashboard-admin', compact('user'));
    }
    public function dashboardjadwaldokter() {
        $user = Auth::user();
        return view('admin.jadwaldok', compact('user'));
    }
    public function dashboardprofil() {
        $user = Auth::user();
        return view('admin.profil', compact('user'));
    }
    public function dashboardstokobat() {
        $user = Auth::user();
        return view('admin.stokobat', compact('user'));
    }
}
