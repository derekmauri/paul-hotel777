<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChecAuthController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        if ($user->hasRole('admin')){
            return redirect()->route('admin');
        }
        if ($user->hasRole('pimpinan')){
            return redirect()->route('pimpinan');
        }

        if ($user->hasRole('tamu')){
            return redirect()->route('tamu');
        }
        // dd($user);
    }
}
