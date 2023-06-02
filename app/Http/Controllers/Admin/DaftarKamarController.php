<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DaftarKamar;
use App\Models\tipe;
use Illuminate\Http\Request;

class DaftarKamarController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarKamar = DaftarKamar::all();
        $tipe = tipe::all();
        return view('admin.daftarKamar.index', [
            'daftarKamar' => $daftarKamar,
            'tipe' => $tipe
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
        return view('admin.daftarKamar.insert', [
            'tipe' => $tipe
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
        DaftarKamar::create($request->all());

        return redirect()->route('daftarKamar.index')
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
        $daftarKamar = DaftarKamar::find($id);
        return view('admin.daftarKamar.update', [
            'daftarKamar' => $daftarKamar,
            'tipe' => $tipe
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
        DaftarKamar::find($id)->update($request->all());
        return redirect()->route('daftarKamar.index')
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
        DaftarKamar::destroy($id);
        return redirect()->route('daftarKamar.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
