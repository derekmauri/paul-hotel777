<?php

namespace App\Http\Controllers\Pimpinan;

use App\Http\Controllers\Controller;
use App\Models\tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index()
    {
        $tamu = tamu::all();
        return view('pimpinan.tamu.index', [
            'tamu' => $tamu
        ]);
    }
}
