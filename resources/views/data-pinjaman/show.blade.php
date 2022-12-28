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
            <strong>Nomor Pinjaman:</strong>
            {{-- {{ $sisw->no_pinjaman }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kode Pinjaman:</strong>
            {{-- {{ $sisw->kode_pinjam }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tanggal Pinjaman:</strong>
            {{-- {{ $sisw->tanggal_pinjam }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Pengajuan:</strong>
            {{-- {{ $sisw->jenis_pengajuan }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jatuh Tempo:</strong>
            {{-- {{ $sisw->jatuh_tempo }} --}}
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
            <strong>Jumlah Angsuran</strong>
            {{-- {{ $sisw->jumlah_angsuran }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jumlah Dibayar:</strong>
            {{-- {{ $sisw->jumlah_dibayar }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sisa Angsuran:</strong>
            {{-- {{ $sisw->sisa_angsuran }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jumlah Denda:</strong>
            {{-- {{ $sisw->jumlah_denda }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Total Tagihan:</strong>
            {{-- {{ $sisw->total_tagihan }} --}}
        </div>
    </div>

</div>
@stop

