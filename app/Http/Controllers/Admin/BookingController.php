<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DaftarKamar;
use App\Models\tamu;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = Booking::all();
        return view('admin.booking.index', [
            'booking' => $booking,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $daftarKamar = DaftarKamar::all();
        $tamu = tamu::all();
        return view('admin.booking.insert', [
            'daftarKamar' => $daftarKamar,
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

        return redirect()->route('booking.index')
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
        $daftarKamar = daftarKamar::all();
        $tamu = tamu::all();
        $booking = Booking::find($id);
        return view('admin.booking.update', [
            'booking' => $booking,
            'daftarKamar' => $daftarKamar,
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
        return redirect()->route('booking.index')
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
        return redirect()->route('booking.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
