<?php

namespace App\Http\Controllers\User;

use App\Models\karyawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = karyawan::all();
        return view('user.karyawan.index', [
            'karyawan' => $karyawan
        ]);
    }
}
