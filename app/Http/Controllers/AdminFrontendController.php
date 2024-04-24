<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Obat;
use App\Models\JadwalDokter;
use Carbon\Carbon;

class AdminFrontendController extends Controller
{
    public function dashboard() {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();
        $onlineUser = User::where('last_activity', '>=', Carbon::now()->subMinutes(2))->get();

        $activeUser = $onlineUser->filter(function ($user) { return $user->Authorize === "User"; });
        $activeDokter = $onlineUser->filter(function ($user) { return $user->Authorize === "Dokter"; });
        $activeAdmin = $onlineUser->filter(function ($user) { return $user->Authorize === "Admin"; });

        return view('admin.home', compact('user', 'activeAdmin'));
    }
    public function dashboardjadwaldokter() {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();



        // $dokters = User::where('Authorize', 'Dokter')->get();
        $dokterjadwal = JadwalDokter::all();
        return view('admin.jadwaldok', compact('user', 'dokterjadwal'));
    }
    public function dashboardprofil() {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();
        return view('admin.profil', compact('user'));
    }
    public function dashboardstokobat() {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();
        $obat = Obat::all();
        return view('admin.stokobat', compact('user', 'obat'));
    }
    public function dashboarddatadokter() {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();
        $dokters = User::where('Authorize', 'Dokter')->get();
        return view('admin.datadokter', compact('user', 'dokters'));
    }
    public function dashboardantrian() {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();
        return view('admin.antrian', compact('user'));
    }
    public function dashboarddatapasien() {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();
        return view('admin.datapasien', compact('user'));
    }
    public function dashboardformpasien() {
        $user = Auth::user();
        $user->last_activity = now();
        $user->save();
        return view('admin.formpasien', compact('user'));
    }
}
