@extends('adminlte::page')

@section('title', 'Tambah User')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Anggota</h1>
@stop

@section('content')
    <form action="{{route('anggota.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputName">Nomor Pengajuan</label>
                        <input type="text" class="form-control @error('nomor pengajuan') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan No. Pengajuan" name="nomor pengajuan" value="{{old('nomor pengajuan')}}">
                        @error('nomor pengajuan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Nomor Anggota</label>
                        <input type="text" class="form-control @error('nomor anggota') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan No. Anggota" name="nik" value="{{old('nomor anggota')}}">
                        @error('nomor anggota') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Nama Anggota</label>
                        <input type="text" class="form-control @error('nama anggota') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan Nama Anggota" name="nama anggota" value="{{old('nama anggota')}}">
                        @error('nama anggota') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Jenis Pengajuan</label>
                        <input type="text" class="form-control @error('jenis pengajuan') is-invalid @enderror" id="exampleInputName" placeholder="Contoh : Biasa/Insidentil" name="jenis pengajuan" value="{{old('jenis pengajuan')}}">
                        @error('jenis pengajuan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Nominal</label>
                        <input type="text" class="form-control @error('nominal') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan Jumlah Uang" name="nominal" value="{{old('nominal')}}">
                        @error('nominal') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Lama Angsuran</label>
                        <input type="text" class="form-control @error('lama angsuran') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan Berapa Lama Angsuran" name="angsuran" value="{{old('angsuran')}}">
                        @error('lama angsuran') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan Keterangan" name="keterangan" value="{{old('keterangan')}}">
                        @error('keterangan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('anggota.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
