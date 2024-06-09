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

        if (Auth::check() && Auth::user()->Authorize === "Admin") {
            return back();
        } else if (Auth::check() && Auth::user()->Authorize === "Dokter") {
            return back();
        } else if (Auth::check() && Auth::user()->Authorize === "User") {
            return back();
        }
        return view('auth.login');
    }


    public function login(Request $request) {

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->Authorize === "Admin") {
                return redirect()->intended('/dashboard-admin');
            } else if ($user->Authorize === "Dokter") {
                return redirect()->intended('/homeDokter');
            } else {
                return redirect()->intended('/dashboardpasien');

            }
        }
        $user = User::where('username', $request->username)->first();

        if ($user) {
            // Jika username ditemukan tapi password salah
            return redirect()->back()->withInput($request->only('username'))->withErrors([
                'password' => __('Password yang anda masukkan salah'),
            ]);
        } else {
            // Jika username tidak ditemukan
            return redirect()->back()->withInput($request->only('username'))->withErrors([
                'username' => __('Username tidak ditemukan'),
            ]);
        }
    }
    public function forgot_password(){
        return view('auth.forgot-password');    
    }
    public function forgot_password_act(Request $request)
    {
        $customMessage = [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid'
        ];
        $request->validate([
            'email' => 'required|email'
        ], $customMessage);

        return redirect()->route('forgot-password')->with('success', 'kami telah mengirim link reset password');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function showRegister()
    {

        if (Auth::check() && Auth::user()->Authorize === "Admin") {
            return back();
        } else if (Auth::check() && Auth::user()->Authorize === "Dokter") {
            return back();
        } else if (Auth::check() && Auth::user()->Authorize === "User") {
            return back();
        }

        return view('auth.register');
    }

    public function register(Request $request) {
        $validateData = $request->validate(
            [
                'username' => 'required|string|min:3|max:255|unique:users',
                'fullname' => 'required|string|min:3|max:255',
                'password' => 'required|string|min:6|confirmed',
                'nohp' => 'required|numeric|unique:users|digits_between:10,15',
                'email' => 'required|string|email|min:3|max:255|unique:users'
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
                'email.required' => 'Ups! sepertinya kamu lupa memasukkan email',
                'email.min' => 'Email terlalu pendek',
                'email.unique' => 'Ups! email ini sudah terdaftar',
                'password.required' => 'Ups, password harus diisi.',
                'password.confirmed' => 'Konfirmasi password tidak cocok.',
                'password.min' => 'Password terlalu pendek. Minimal 6 karakter.',
            ]
        );

        $user = new User();
        $user->username = $validateData['username'];
        $user->fullname = $validateData['fullname'];
        $user->password = Hash::make($validateData['password']);
        $user->image =  '/storage/photoProfiles/standar.png';
        $user->nohp = $validateData['nohp'];
        $user->email = $validateData['email'];
        $user->Authorize = "User";
        $user->jenis_kelamin = $request->input('jenis_kelamin');
        $user->alamat = $request->input('alamat');
        $user->save();

        if ($user) {
            return redirect('/login');
        } else {
            return back()->withErrors(['msg' => 'nama atau password salah!']);
        }
    }

    public function processRecoveryPassword(Request $request)
    {
        $user = null;

        $validateData = $request->validate(
            [
                'new_password' => 'required|string|min:6|confirmed',
                'nohp' => 'required|numeric|exists:users,nohp|digits_between:10,15',
                'email' => 'required|string|email:rfc,dns|exists:users,email|min:3|max:255'
            ],
            [
                'nohp.required' => 'Nomor telepon harus diisi.',
                'nohp.numeric' => 'Nomor telepon tidak cocok dengan pengguna yang terdaftar.',
                'nohp.digits_between' => 'Nomor telepon tidak cocok dengan pengguna yang terdaftar.',
                'nohp.exists' => 'Nomor telepon tidak cocok dengan pengguna yang terdaftar.',
                'email.required' => 'Alamat email harus di isi.',
                'email.min' => 'Alamat Email tidak cocok dengan pengguna yang terdaftar',
                'email.exists' => 'Email tidak cocok dengan pengguna yang terdaftar.',
                'new_password.required' => 'Password baru harus diisi.',
                'new_password.confirmed' => 'Konfirmasi password tidak cocok.',
                'new_password.min' => 'Password terlalu pendek. Minimal 6 karakter.'
            ]
        );

        # Cari pengguna berdasarkan email atau nomor telepon
        if ($request->has('email') && $request->has('nohp')) {
            $user = User::where('email', $request->email)
                ->Where('nohp', $request->nohp)
                ->first();

            # Jika pengguna tidak ditemukan
            if (!$user) {
                return redirect()->back();
            } else {
                # update password pengguna
                $user->password = Hash::make($request->new_password);
                $user->save();
                return redirect('/login')->with('message', 'Password Berhasil Diperbarui');
            }
        } else {
            return redirect()->back();
        }
    }
}

