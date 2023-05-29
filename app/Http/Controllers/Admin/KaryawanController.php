<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = karyawan::all();
        return view('admin.karyawan.index', [
            'karyawan' => $karyawan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.karyawan.insert');
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
        $nama_foto = time() . '.' . $ekstensi_foto;
        Storage::putFileAs('public/karyawan', $request->foto, $nama_foto);

        karyawan::create([
            'nm_karyawan' => $request->nm_karyawan,
            'tempat' => $request->tempat,
            'tgl_lahir' => $request->tgl_lahir,
            'jenkel' => $request->jenkel,
            'status' => $request->status,
            'no_telepon' => $request->no_telepon,
            'foto' => $nama_foto,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('karyawan.index')
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
        $karyawan = karyawan::find($id);
        return view('admin.karyawan.update', [
            'karyawan' => $karyawan
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
        $nama_foto = time() . '.' . $ekstensi_foto;
        Storage::putFileAs('public/karyawan', $request->foto, $nama_foto);

        karyawan::find($id)->update([
            'nm_karyawan' => $request->nm_karyawan,
            'tempat' => $request->tempat,
            'tgl_lahir' => $request->tgl_lahir,
            'jenkel' => $request->jenkel,
            'status' => $request->status,
            'no_telepon' => $request->no_telepon,
            'foto' => $nama_foto,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('karyawan.index')
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
        $karyawan = karyawan::find($id);
        Storage::delete("public/karyawan/$karyawan->foto");
        $karyawan->delete();
        return redirect()->route('karyawan.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
