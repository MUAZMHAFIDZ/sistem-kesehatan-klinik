<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->Authorize === "Admin") {
                return redirect()->intended('/dashboard-admin');
            } else if ($user->Authorize === "Dokter") {
                return redirect()->intended('/homeDokter');
            } else if ($user->Authorize === "Dokter") {
                return redirect()->intended('/dashboard-dokter');
            } else {
                return redirect()->intended('pasien.dashboardpasien');
            }
        }
        $user = User::where('username', $request->username)->first();

        if ($user) {
            // Jika username ditemukan tapi password salah
            return redirect()->back()->withInput($request->only('username'))->withErrors([
                'password' => __('Password salah'),
            ]);
        } else {
            // Jika username tidak ditemukan
            return redirect()->back()->withInput($request->only('username'))->withErrors([
                'username' => __('Username tidak ditemukan'),
            ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validateData = $request->validate(
            [
                'username' => 'required|string|min:3|max:255|unique:users',
                'fullname' => 'required|string|min:3|max:255',
                'password' => 'required|string|min:6|confirmed',
                'nohp' => 'required|numeric|unique:users|digits_between:10,15'
            ],
            [
                'username.required' => 'Ups! sepertinya kamu lupa memasukkan username.',
                'username.unique' => 'Maaf, username ini sudah digunakan. Silahkan coba yang lain.',
                'username.max' => 'Username terlalu panjang. maksimal 255 karakter ya.',
                'username.min' => 'Username terlalu pendek. minimal 3 karakter ya.',
                'fullname.required' => 'Ups! sepertinya kamu lupa memasukkan fullname',
                'fullname.max' => 'Fullname terlalu panjang. maksimal 255 karakter ya.',
                'fullname.min' => 'Fullname terlalu pendek. minimal 3 karakter ya.',
                'nohp.required' => 'Ups! Nomor telepon harus diisi, tidak boleh kosong.',
                'nohp.numeric' => 'Nomor telepon hanya boleh menggunakan angka.',
                'nohp.unique' => 'Maaf, nomor telepon tersebut sudah digunakan oleh pengguna lain.',
                'nohp.digits_between' => 'Nomor telepon terlalu pendek, pastikan memasukkan nomor telepon yang benar.',
                'password.required' => 'Ups, password harus diisi.',
                'password.confirmed' => 'Konfirmasi password tidak cocok.',
                'password.min' => 'Password terlalu pendek. Minimal 6 karakter.'
            ]
        );

        $user = new User();
        $user->username = $validateData['username'];
        $user->fullname = $validateData['fullname'];
        $user->password = Hash::make($validateData['password']);
        $user->image =  'storage/photoProfiles/standar.png';
        $user->nohp = $validateData['nohp'];
        $user->Authorize = "User";
        $user->save();

        if ($user) {
            return redirect('/login');
        } else {
            return back()->withErrors(['msg' => 'nama atau password salah!']);
        }
    }
}
