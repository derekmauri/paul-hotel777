<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\pesanan;
use Illuminate\Http\Request;

class TransaksiApi extends Controller
{
    public function index(Request $request)
    {
        $bulan = $request->bulan;
        $tahun = $request->tahun;
        $data = pesanan::whereMonth('checkin', 'like', "$bulan")
            ->whereYear('checkin', 'like', "$tahun")
            ->get();
        return response()->json($data);
    }
}
