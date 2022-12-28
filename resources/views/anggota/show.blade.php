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
            <strong>NIK:</strong>
            {{-- {{ $sisw->nik }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Kelamin:</strong>
            {{-- {{ $sisw->jk }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tempat Lahir:</strong>
            {{-- {{ $sisw->tmp_lahir }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tanggal Lahir:</strong>
            {{-- {{ $sisw->tgl_lahir }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status:</strong>
            {{-- {{ $sisw->status }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Agama:</strong>
            {{-- {{ $sisw->agama }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Pekerjaan:</strong>
            {{-- {{ $sisw->pekerjaan }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat:</strong>
            {{-- {{ $sisw->alamat }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kota:</strong>
            {{-- {{ $sisw->kota }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nomor telfon:</strong>
            {{-- {{ $sisw->no_telp }} --}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tanggal Daftar:</strong>
            {{-- {{ $sisw->tgl_daftar }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Aktif:</strong>
            {{-- {{ $sisw->aktif }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nomor Akun:</strong>
            {{-- {{ $sisw->no_akun }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Bank:</strong>
            {{-- {{ $sisw->bank }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>User Name:</strong>
            {{-- {{ $sisw->username }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email Address:</strong>
            {{-- {{ $sisw->email }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            {{-- {{ $sisw->password }} --}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Konfirmasi Password:</strong>
            {{-- {{ $sisw->password_confirmation }} --}}
        </div>
    </div>

</div>
@stop

