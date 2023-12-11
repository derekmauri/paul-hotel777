<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = fasilitas::all();
        return view('user.fasilitas.index', [
            'fasilitas' => $fasilitas
        ]);
    }
}
