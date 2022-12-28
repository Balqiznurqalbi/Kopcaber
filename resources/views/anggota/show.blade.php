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
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama:</strong>
                        {{ $anggota->nama }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NIK:</strong>
                        {{ $anggota->nik }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jenis Kelamin:</strong>
                        {{ $anggota->jk }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tempat Lahir:</strong>
                        {{ $anggota->tmp_lahir }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal Lahir:</strong>
                        {{ $anggota->tgl_lahir }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status:</strong>
                        {{ $anggota->status }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Agama:</strong>
                        {{ $anggota->agama }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pekerjaan:</strong>
                        {{ $anggota->pekerjaan }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat:</strong>
                        {{ $anggota->alamat }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kota:</strong>
                        {{ $anggota->kota }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nomor telfon:</strong>
                        {{ $anggota->no_telp }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal Daftar:</strong>
                        {{ $anggota->tgl_daftar }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Aktif:</strong>
                        {{ $anggota->aktif }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nomor Akun:</strong>
                        {{ $anggota->no_akun }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Bank:</strong>
                        {{ $anggota->bank }}
                    </div>
                </div>

                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>User Name:</strong>
            {{ $anggota->username }}
        </div>
    </div> --}}

                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email Address:</strong>
            {{ $anggota->email }}
        </div>
    </div> --}}

                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            {{ $anggota->password }}
        </div>
    </div> --}}

                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Konfirmasi Password:</strong>
            {{ $anggota->password_confirmation }}
        </div>
    </div> --}}
            </div>
        </div>
    </div>
    @stop
