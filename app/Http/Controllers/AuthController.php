<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->Authorize === "Admin") {
                return redirect()->intended('/dashboard-admin');
            } 
            // else if ($user->Authorize === "Dokter") {
            //     return redirect()->intended('/dashboard-dokter');
            // } 
            else {
                return redirect()->intended('/');
            }
        } else {
            return back()->withErrors(['msg' => 'nama atau password salah!']);
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

    public function showRegister() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|string|max:255|unique:users',
            'fullname' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'nohp' => 'required|numeric|unique:users'
        ]);

        $user = new User();
            $user->name = $validateData['name'];
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