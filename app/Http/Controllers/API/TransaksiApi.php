<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class TransaksiApi extends Controller
{
    public function index(Request $request)
    {
        $bulan = $request->bulan;
        $tahun = $request->tahun;
        $data = Booking::whereMonth('checkin', 'like', "%$bulan%")
            ->whereYear('checkin', 'like', "%$tahun%")
            ->orderBy('checkin', 'desc')
            ->get();
        return response()->json($data);
    }
}
