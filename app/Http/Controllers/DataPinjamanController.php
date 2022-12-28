<?php

namespace App\Http\Controllers;

use App\Models\DataPinjaman;
use Illuminate\Http\Request;

class DataPinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjaman = DataPinjaman::all();
        return view('data-pinjaman.index', compact('pinjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data-pinjaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:200'],
            'no_pengajuan' => 'required',
            'no_anggota' => 'required',
            'jenis_pengajuan' => 'required',
            'nominal' => 'required',
            'lama_angsuran' => 'required',
            'keterangan' => 'required',
        ]);
        DataPinjaman::create($request->all());

        return redirect(route('data-pinjaman.index'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('data-pinjaman.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('data-pinjaman.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPinjaman $pinjaman)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:200'],
            'no_pinjaman' => 'required',
            'no_anggota' => 'required',
            'jenis_pinjaman' => 'required',
            'nominal' => 'required',
            'lama_angsuran' => 'required',
            'keterangan' => 'required',
        ]);
        $pinjaman->update($request->all());

        return redirect(route('data-pinjaman.index'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPinjaman $pinjaman)
    {
        $pinjaman->delete();

        return redirect(route('data-pinjaman.index'))->with('success', 'Data Berhasil Dihapus');
    }
}
