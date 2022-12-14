@extends('adminlte::page')

@section('title', 'List User')

@section('content_header')
    <h1 class="m-0 text-dark">List User</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('anggota.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No. Telp</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($anggota as $ang)
                            @php
                                $no = 1;
                            @endphp
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$ang->nama}}</td>
                                <td>{{$ang->jk}}</td>
                                <td>{{$ang->alamat}}</td>
                                <td>{{$ang->no_telp}}</td>
                                <td>
                                    <a href="{{ route('anggota.edit', $ang->id)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a class="btn btn-info btn-xs" href="{{ route('anggota.show', $ang->id)}}">Show</a>
                                    <a href="" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });

        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }

    </script>
@endpush
