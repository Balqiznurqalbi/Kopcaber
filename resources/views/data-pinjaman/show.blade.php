@extends('adminlte::page')

@section('title', 'List User')

@section('content_header')
<div class="col-lg-12 margin-tb">
    <div class="float-left">
        <h1 class="m-0 text-dark">Show Anggota</h1>
    </div>
    <div class="float-right">
        <a class="btn btn-secondary" href="{{ route('anggota.index') }}"> Back</a>
    </div>
</div>

@stop

@section('content')
<div class="row mt-5 mb-5">

</div>

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama:</strong>
            {{-- {{ $sisw->name }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nomor Pinjaman:</strong>
            {{-- {{ $sisw->no_pinjaman }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nomor Anggota:</strong>
            {{-- {{ $sisw->no_anggota }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Pinjaman:</strong>
            {{-- {{ $sisw->jenis_pinjaman }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nominal:</strong>
            {{-- {{ $sisw->nominal }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Lama Angsuran:</strong>
            {{-- {{ $sisw->lama_angsuran }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Keterangan</strong>
            {{-- {{ $sisw->keterangan }} --}}
        </div>
    </div>

</div>
@stop

