<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class KelolaRumahSakitController extends Controller
{
    public function registerDokter(Request $request) {
        $validateData = $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'fullname' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'nohp' => 'required|numeric|unique:users'
        ]);

        $user = new User();
            $user->username = $validateData['username'];
            $user->fullname = $validateData['fullname'];
            $user->password = Hash::make($validateData['password']);
            $user->image =  'storage/photoProfiles/standar.png';
            $user->nohp = $validateData['nohp'];
            $user->Authorize = "Dokter";
            $user->save();

        if ($user) {
            return back();
        }
    }
}
