<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tamu = tamu::all();
        return view('admin.tamu.index', [
            'tamu' => $tamu
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tamu.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ekstensi_foto = $request->file('foto')->extension();
        $nama_foto = time(). '.' . $ekstensi_foto;
        Storage::putFileAs('public/tamu', $request->foto, $nama_foto);

        tamu::create([
            'nik' => $request->nik,
            'nm_tamu' => $request->nm_tamu,
            'tempat' => $request->tempat,
            'tgl_lahir' => $request->tgl_lahir,
            'jenkel' => $request->jenkel,            
            'agama' => $request->agama,
            'status' => $request->status,
            'foto' => $nama_foto,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('tamu.index')
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
        $tamu = tamu::find($id);
        return view('admin.tamu.update',[
            'tamu' => $tamu
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
        $ekstensi_foto = $request->file('foto')->extension();
        $nama_foto = time(). '.' . $ekstensi_foto;
        Storage::putFileAs('public/tamu', $request->foto, $nama_foto);

        tamu::find($id)->update([
            'nik' => $request->nik,
            'nm_tamu' => $request->nm_tamu,
            'tempat' => $request->tempat,
            'tgl_lahir' => $request->tgl_lahir,
            'jenkel' => $request->jenkel,
            'agama' => $request->agama,
            'status' => $request->status,
            'foto' => $nama_foto,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('tamu.index')
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
        tamu::destroy($id);
        return redirect()->route('tamu.index')
            ->with('berhasil','Data Berhasil Dihapus');
    }
}
