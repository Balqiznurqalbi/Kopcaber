<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', [
            'anggota' => $anggota
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:200'],
            'nik' => 'required',
            'jk' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'status' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'no_telp' => 'required',
            'tgl_daftar' => 'required',
            'aktif' => 'required',
            'no_akun' => 'required',
            'bank' => 'required',
            // 'username' => 'required',
            // 'email' => 'required',
            // 'password' => 'required',
        ]);
        Anggota::create($request->all());

        return redirect(route('anggota.index'))->with('success', 'Data Berhasil Disimpan');
    }

    public function show(Anggota $anggota)
    {
        // $anggota = Anggota::find($id);
        return view('anggota.show',compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggota)
    {
        // $anggota = Anggota::all();
        return view('anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:200'],
            'nik' => 'required',
            'jk' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'status' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'no_telp' => 'required',
            'tgl_daftar' => 'required',
            'aktif' => 'required',
            'npa' => 'required',
            'no_akun' => 'required',
            'bank' => 'required',
            // 'username' => 'required',
            // 'email' => 'required',
            // 'password' => 'required',
        ]);
        $anggota->update($request->all());

        return redirect()->route('anggota.index')
            ->with('success_message', 'Berhasil mengubah anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        $anggota->delete();

        return redirect()->route('anggota.index')->with('succes','Anggota Berhasil di Hapus');
    }
}
