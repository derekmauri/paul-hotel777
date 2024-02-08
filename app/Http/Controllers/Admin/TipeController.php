<?php

namespace App\Http\Controllers\Admin;

use App\Models\tipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipe = tipe::all();
        return view('admin.tipe.index', [
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
        return view('admin.tipe.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // remove characters escape number
        $harga = str_replace('.', '', $request->harga);
        $ekstensi_foto = $request->file('foto_kamar')->extension();
        $nama_foto = time() . '.' . $ekstensi_foto;
        Storage::putFileAs('public/foto_kamar', $request->foto_kamar, $nama_foto);


        tipe::create([
            'tipe_kamar' => $request->tipe_kamar,
            'harga' => $harga,
            'foto_kamar' => $nama_foto
        ]);

        return redirect()->route('tipe.index')
            ->with('berhasil', 'Data Berhasil Ditambah');
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
        $tipe = tipe::find($id);
        return view('admin.tipe.update', [
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
        // if $request->hasFile('foto_kamar')
        $tipe = tipe::find($id);
        $nama_foto = $tipe->foto_kamar;
        $harga = str_replace('.', '', $request->harga);
        if ($request->hasFile('foto_kamar')) {
            // delete old image
            Storage::delete('public/foto_kamar/' . $tipe->foto_kamar);
            // upload new image
            $ekstensi_foto = $request->file('foto_kamar')->extension();
            $nama_foto = time() . '.' . $ekstensi_foto;
            Storage::putFileAs('public/foto_kamar', $request->foto_kamar, $nama_foto);
        }
        tipe::find($id)->update([
            'tipe_kamar' => $request->tipe_kamar,
            'harga' => $harga,
            'foto_kamar' => $nama_foto
        ]);

        return redirect()->route('tipe.index')
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
        $tipe = tipe::find($id);
        Storage::delete("public/foto_kamar/$tipe->foto_kamar");
        tipe::destroy($id);
        return redirect()->route('tipe.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
