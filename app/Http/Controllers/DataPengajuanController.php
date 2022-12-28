<?php

namespace App\Http\Controllers;

use App\Models\DataPengajuan;
use Illuminate\Http\Request;

class DataPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajuan = DataPengajuan::all();
        return view('data-pengajuan.index', compact('pengajuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data-pengajuan.create');
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
        DataPengajuan::create($request->all());

        return redirect(route('data-pengajuan.index'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('data-pengajuan.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('data-pengajuan.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPengajuan $pengajuan)
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
        $pengajuan->update($request->all());

        return redirect(route('data-pengajuan.index'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPengajuan $pengajuan)
    {
        $pengajuan->delete();

        return redirect(route('data-pengajuan.index'))->with('success', 'Data Berhasil Dihapus');
    }
}
