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
            return redirect()->intended('/dashboard');
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
            'password' => 'required|string|min:8|confirmed',
            'nohp' => 'required|string|max:255|unique:users'
        ]);

        $photoName = 'standar.png';

        $user = new User();
            $user->name = $validateData['name'];
            $user->password = Hash::make($validasireques['password']);
            $user->image =  'storage/photoProfiles/' . $photoName;
            $user->nohp = $validateData['nohp'];
            $user->save();

        if ($user) {
            return redirect('/login');
        } else {
            return back()->withErrors(['msg' => 'nama atau password salah!']);
        }
    }
}