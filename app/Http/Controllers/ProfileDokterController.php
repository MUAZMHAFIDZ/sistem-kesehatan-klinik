<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileDokterController extends Controller
{
    public function updateProfile(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($user) {
            $user->username = $request->input('username');
            $user->fullname = $request->input('fullname');
            $user->nohp = $request->input('nohp');

            $user->save();
            
            return Redirect()->back()->with('success');
        } 
        }
    }

