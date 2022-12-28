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
            <strong>NIS:</strong>
            {{-- {{ $sisw->NIS }} --}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Siswa:</strong>
            {{-- {{ $sisw->NamaSiswa }} --}}
        </div>
    </div>
</div>
@stop

