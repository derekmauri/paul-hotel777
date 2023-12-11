<?php

namespace App\Http\Controllers\Pimpinan;

use App\Http\Controllers\Controller;
use App\Models\galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = galeri::all();
        return view('pimpinan.galeri.index', [
            'galeri' => $galeri
        ]);
    }
}
