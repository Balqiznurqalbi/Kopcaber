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
                        <label for="exampleInputName">Nomor Pinjaman</label>
                        <input type="text" class="form-control @error('no_pinjaman') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan No. Pinjaman" name="no_pinjaman" value="{{old('no_pinjaman')}}">
                        @error('no_pinjaman') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Kode Pinjaman</label>
                        <input type="text" class="form-control @error('kode_pinjam') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan Kode Pinjam" name="kode_pinjam" value="{{old('kode_pinjam')}}">
                        @error('kode_pinjam') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Tanggal Pinjam</label>
                        <input type="text" class="form-control @error('tanggal_pinjam') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan Tanggal Pinjaman" name="tanggal_pinjam" value="{{old('tanggal_pinjam')}}">
                        @error('tanggal_pinjam') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Jenis Pengajuan</label>
                        <input type="text" class="form-control @error('jenis_pengajuan') is-invalid @enderror" id="exampleInputName" placeholder="Contoh : Biasa/Insidentil" name="jenis_pengajuan" value="{{old('jenis_pengajuan')}}">
                        @error('jenis_pengajuan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Jatuh Tempo</label>
                        <input type="text" class="form-control @error('jatuh_tempo') is-invalid @enderror" id="exampleInputName" placeholder="3 Bulan" name="jatuh_tempo" value="{{old('jatuh_tempo')}}">
                        @error('jatuh_tempo') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Nomor Anggota</label>
                        <input type="text" class="form-control @error('no_anggota') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan No. Anggota" name="no_anggota" value="{{old('no_anggota')}}">
                        @error('no_anggota') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Jumlah Angsuran</label>
                        <input type="text" class="form-control @error('jumlah_angsuran') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan Jumlah Angsuran" name="jumlah_angsuran" value="{{old('jumlah_angsuran')}}">
                        @error('jumlah_angsuran') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Jumlah Dibayar</label>
                        <input type="text" class="form-control @error('jumlah_dibayar') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan Jumlah" name="jumlah_dibayar" value="{{old('jumlah_dibayar')}}">
                        @error('jumlah_dibayar') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Sisa Angsuran</label>
                        <input type="text" class="form-control @error('sisa_angsuran') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan Sisa Angsuran" name="sisa_angsuran" value="{{old('sisa_angsuran')}}">
                        @error('sisa_angsuran') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Jumlah Denda</label>
                        <input type="text" class="form-control @error('jumlah_denda') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan Jumlah Denda" name="jumlah_denda" value="{{old('jumlah_denda')}}">
                        @error('jumlah_denda') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Total Tagihan</label>
                        <input type="text" class="form-control @error('total_tagihan') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan Total Tagihan" name="total_tagihan" value="{{old('total_tagihan')}}">
                        @error('total_tagihan') <span class="text-danger">{{$message}}</span> @enderror
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