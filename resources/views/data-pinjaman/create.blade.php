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
                        <label for="exampleInputName">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan nama lengkap" name="nama" value="{{old('nama')}}">
                        @error('nama') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Nomor Pinjaman</label>
                        <input type="text" class="form-control @error('no_pinjaman') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan No. Pinjaman" name="no_pinjaman" value="{{old('no_pinjaman')}}">
                        @error('no_pinjaman') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Nomor Anggota</label>
                        <input type="text" class="form-control @error('no_anggota') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan No. Anggota" name="no_anggota" value="{{old('no_anggota')}}">
                        @error('no_anggota') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Jenis Pinjaman</label>
                        <input type="text" class="form-control @error('jenis_pinjaman') is-invalid @enderror" id="exampleInputName" placeholder="Contoh : Biasa/Insidentil" name="jenis_pinjaman" value="{{old('jenis_pinjaman')}}">
                        @error('jenis_pinjaman') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Nominal</label>
                        <input type="text" class="form-control @error('nominal') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan Jumlah Uang" name="nominal" value="{{old('nominal')}}">
                        @error('nominal') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Lama Angsuran</label>
                        <input type="text" class="form-control @error('lama angsuran') is-invalid @enderror" id="exampleInputName" placeholder="3 bulan/ 6 bulan/ 12 bulan" name="angsuran" value="{{old('angsuran')}}">
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