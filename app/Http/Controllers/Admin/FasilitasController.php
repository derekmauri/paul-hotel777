<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\fasilitas;
use App\Models\tipe;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = fasilitas::all();
        $tipe = tipe::all();
        return view('admin.fasilitas.index', [
            'fasilitas' => $fasilitas,
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
        return view('admin.fasilitas.insert', [
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
        fasilitas::create([
            'tipe_id' => $request->tipe_id,
            'nm_fasilitas' => $request->nm_fasilitas,
            'jumlah' => $request->jumlah
        ]);

        return redirect()->route('fasilitas.index')
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
        $fasilitas = fasilitas::find($id);
        return view('admin.fasilitas.update', [
            'fasilitas' => $fasilitas,
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
        fasilitas::find($id)->update([
            'tipe_id' => $request->tipe_id,
            'nm_fasilitas' => $request->nm_fasilitas,
            'jumlah' => $request->jumlah
        ]);
        return redirect()->route('fasilitas.index')
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
        fasilitas::destroy($id);
        return redirect()->route('fasilitas.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
