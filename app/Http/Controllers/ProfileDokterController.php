<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\kehadiranDokter;

class ProfileDokterController extends Controller
{
    public function updateProfile(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($user) {

            $user->username = $request->input('username');
            $user->fullname = $request->input('fullname');
            $user->email = $request->input('email');
            $user->nohp = $request->input('nohp');
            $user->alamat = $request->input('alamat');
            $user->riwayat_pendidikan = $request->input('riwayat_pendidikan');

            $user->save();

            return Redirect()->back()->with('success');
        }
        }
        public function kehadiranDokter(Request $request)
        {
            $id = Auth::user()->id;
            kehadiranDokter::where('id', $id)->update([ 'terakhir_hadir' => date('Y-m-d') ]);

            return Redirect()->back();
        }
    }

