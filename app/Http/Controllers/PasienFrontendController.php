<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Antrian;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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

    // public function showAntrian($id) 
    // {
    //     $user = User::find($id);

    //     $antrian = $Antrian->antrian;

    //     $nama = $antrian->nama;
    //     $noTelepon = $antrian->no_telepon;
    //     $alamat = $antrian->alamat;
    //     $usia = $antrian->usia;
    //     $jenis_kelamin = $antrian->jenis_kelamin;
    //     $tanggal_periksa = $antrian->tanggal_periksa;
    //     $kategori_layanan = $antrian->kategori_layanan;

    //     return view('/dashboardpasien', compact('nama', 'no_telepon', 'alamat', 'usia', 'jenis_kelamin', 'tanggal_periksa', 'kategori_layanan'));
    // }

    public function showAntrian($id) 
    {
    // Cari pengguna berdasarkan ID
    $user = User::find($id);

    // Jika pengguna ditemukan, ambil data antriannya
    if ($user) {
        
        $antrian = $user->antrian;

        if ($antrian) {
            $nama = $antrian->nama;
            $no_telepon = $antrian->no_telepon;
            $alamat = $antrian->alamat;
            $usia = $antrian->usia;
            $jenis_kelamin = $antrian->jenis_kelamin;
            $tanggal_periksa = $antrian->tanggal_periksa;
            $kategori_layanan = $antrian->kategori_layanan;

            return view('dashboardpasien', compact('nama', 'noTelepon', 'alamat', 'usia', 'jenis_kelamin', 'tanggal_periksa', 'kategori_layanan'));
        } else {
            // Antrian tidak ditemukan, tangani kasus ini sesuai kebutuhan (misalnya, tampilkan pesan kesalahan)
            return redirect()->back()->with('error', 'Antrian tidak ditemukan.');
        }
    } else {
        // Pengguna tidak ditemukan, tangani kasus ini sesuai kebutuhan (misalnya, tampilkan pesan kesalahan)
        return redirect()->back()->with('error', 'Pengguna tidak ditemukan.');
    }
    }

    public function updateAkunPasien(Request $request, $id) {
        $akunPasien = User::find($id);
        if ($request->hasFile('image')) {
            $photonames = $akunPasien->username . "." . $request->file('image')->getClientOriginalExtension();
            if (Storage::exists('public/storage/photoProfiles/' . $akunPasien->username)) {
                Storage::delete('public/storage/photoProfiles/' . $akunPasien->username);
            }
            $request->file('image')->storeAs('photoProfiles', $photonames);
            $photonames = '/storage/photoProfiles/' . $photonames;
            User::where('id', $id)->update([
                'image' => $photonames,
            ]);
        }

        if ($request->input('username') != $akunPasien->username && strlen($request->input('username')) >= 3) {
            $namaLama = str_replace('/storage/photoProfiles/', '', $akunPasien->image);
            $namaBaru = str_replace($akunPasien->username, $request->input('username'), $namaLama);
            $fileLama = 'photoProfiles/' . $namaLama;
            $fileBaru = 'photoProfiles/' . $namaBaru;
            Storage::move($fileLama, $fileBaru);
            User::where('id', $id)->update([
                'username' => $request->input('username'),
                'image' => '/storage/photoProfiles/' . $namaBaru
            ]);
        }

        if ($request->input('alamat') != $akunPasien->alamat && strlen ($request->input('alamat')) >= 3) {
            User::where('id', $id)->update([
                'alamat' => $request->input('alamat')
            ]);
        }

        if ($request->input('jenis_kelamin') != $akunPasien->jenis_kelamin) {
            User::where('id', $id)->update([
                'jenis_kelamin' => $request->input('jenis_kelamin'),
            ]);
        }
        
        if ($request->input('tanggal_lahir') != $akunPasien->tanggal_lahir) {
            User::where('id', $id)->update([
                'tanggal_lahir' => $request->input('tanggal_lahir'),
            ]);
        }

        return back();
    }

}
