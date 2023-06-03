<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\DaftarKamar;
use App\Models\tamu;
use App\Models\tipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarKamar = DaftarKamar::all();
        $tamu = Auth::user()->akunTamu;
        $riwayat_booking = Booking::where('tamu_id', $tamu->tamu_id)->get();
        return view('user.booking.index', [
            'daftarKamar' => $daftarKamar,
            'riwayat_booking' => $riwayat_booking,
            'tamu' => $tamu,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipe = tipe::all();
        $tamu = tamu::all();
        return view('user.booking.insert', [
            'tipe' => $tipe,
            'tamu' => $tamu,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Booking::create($request->all());

        return redirect()->route('user-booking.index')
            ->with('berhasil', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipe = tipe::all();
        $tamu = tamu::all();
        $booking = Booking::find($id);
        return view('user.booking.update', [
            'booking' => $booking,
            'tipe' => $tipe,
            'tamu' => $tamu,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Booking::find($id)->update($request->all());
        return redirect()->route('user-booking.index')
            ->with('berhasil', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::destroy($id);
        return redirect()->route('user-booking.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
