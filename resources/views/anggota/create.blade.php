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
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Nama lengkap" name="name" value="{{old('name')}}">
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="exampleInputName" placeholder="Contoh : 3212155610010001" name="nik" value="{{old('nik')}}">
                        @error('nik') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Jenis Kelamin</label>
                        <input type="text" class="form-control @error('jenis kelamin') is-invalid @enderror" id="exampleInputName" placeholder="pria/wanita" name="jenis kelamin" value="{{old('jenis kelamin')}}">
                        @error('jenis kelamin') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Tempat Lahir</label>
                        <input type="text" class="form-control @error('tempat lahir') is-invalid @enderror" id="exampleInputName" placeholder="Contoh : Jakarta" name="tempat lahir" value="{{old('tempat lahir')}}">
                        @error('tempat lahir') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Tanggal Lahir</label>
                        <input type="text" class="form-control @error('tanggal lahir') is-invalid @enderror" id="exampleInputName" placeholder="Contoh : 20 mei 2001" name="tanggal lahir" value="{{old('tanggal lahir')}}">
                        @error('tanggal lahir') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Status</label>
                        <input type="text" class="form-control @error('status') is-invalid @enderror" id="exampleInputName" placeholder="Contoh : Belum Nikah/Sudah Nikah" name="status" value="{{old('status')}}">
                        @error('status') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Agama</label>
                        <input type="text" class="form-control @error('agama') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan Agama" name="agama" value="{{old('agama')}}">
                        @error('agama') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Pekerjaan</label>
                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan Pekerjaan Anda" name="pekerjaan" value="{{old('pekerjaan')}}">
                        @error('pekerjaan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputName" placeholder="Contoh : Jl.Sudirman RT/RW/NO" name="alamat" value="{{old('alamat')}}">
                        @error('alamat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Kota</label>
                        <input type="text" class="form-control @error('kota') is-invalid @enderror" id="exampleInputName" placeholder="Masukkan Kota Anda Sekarang" name="kota" value="{{old('kota')}}">
                        @error('kota') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Nomor telfon</label>
                        <input type="text" class="form-control @error('nomor telfon') is-invalid @enderror" id="exampleInputName" placeholder="Contoh : 08XXXXXXXXX" name="nomor telfon" value="{{old('nomor telfon')}}">
                        @error('nomor telfon') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Tanggal Daftar</label>
                        <input type="text" class="form-control @error('tanggal daftar') is-invalid @enderror" id="exampleInputName" placeholder="Contoh : 12 agustus 2022" name="tanggal daftar" value="{{old('tanggal daftar')}}">
                        @error('tanggal daftar') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Aktif</label>
                        <input type="text" class="form-control @error('aktif') is-invalid @enderror" id="exampleInputName" placeholder="Contoh : Ya/Tidak" name="aktif" value="{{old('aktif')}}">
                        @error('aktif') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Nomor Akun</label>
                        <input type="text" class="form-control @error('nomor akun') is-invalid @enderror" id="exampleInputName" placeholder="Contoh : 3212" name="nomor akun" value="{{old('nomor akun')}}">
                        @error('nomor akun') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Bank</label>
                        <input type="text" class="form-control @error('bank') is-invalid @enderror" id="exampleInputName" placeholder="Contoh : BCA,MANDIRI/BRI" name="bank" value="{{old('bank')}}">
                        @error('bank') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">User Name</label>
                        <input type="text" class="form-control @error('user name') is-invalid @enderror" id="exampleInputName" placeholder="Contoh : Embuls" name="user name" value="{{old('user name')}}">
                        @error('user name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Masukkan Email" name="email" value="{{old('email')}}">
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password" name="password">
                        @error('password') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword" placeholder="Konfirmasi Password" name="password_confirmation">
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
