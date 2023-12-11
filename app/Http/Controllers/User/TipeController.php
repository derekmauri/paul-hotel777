<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\tipe;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    public function index()
    {
        $tipe = tipe::all();
        return view('user.tipe.index', [
            'tipe' => $tipe
        ]);
    }
}
