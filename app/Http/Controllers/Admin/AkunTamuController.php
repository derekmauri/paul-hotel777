<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AkunTamu;
use App\Models\tamu;
use App\Models\User;
use Illuminate\Http\Request;

class AkunTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akunTamu = AkunTamu::with(['tamu', 'user'])->get();
        return view('admin.akunTamu.index', [
            'akunTamu' => $akunTamu
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tamu = tamu::all();
        return view('admin.akunTamu.insert', [
            'tamu' => $tamu
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
        $tamu_id = $request->tamu_id;
        // cari data tamu id
        $tamu = tamu::find($tamu_id);
        // input data user
        $user = User::create([
            'name' => $tamu->nm_tamu,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'show_password' => $request->password
        ]);
        AkunTamu::create([
            'tamu_id' => $tamu_id,
            'user_id' => $user->id,
        ]);

        return redirect()->route('akunTamu.index')
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
        $akunTamu = AkunTamu::find($id);
        return view('admin.akunTamu.update', [
            'akunTamu' => $akunTamu,
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
        $tamu = AkunTamu::find($id);
        User::find($tamu->user_id)->update([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'show_password' => $request->password
        ]);
        return redirect()->route('akunTamu.index')
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
        $tamu = AkunTamu::find($id);
        User::destroy($tamu->user_id);
        tamu::destroy($id);
        return redirect()->route('akunTamu.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
