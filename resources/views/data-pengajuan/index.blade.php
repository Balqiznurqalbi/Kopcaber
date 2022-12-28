@extends('adminlte::page')

@section('title', 'List User')

@section('content_header')
    <h1 class="m-0 text-dark">Data Pengajuan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('data-pengajuan.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Nomor Pengajuan</th>
                            <th>Nomor Anggota</th>
                            <th>Nama Anggota</th>
                            <th>Nominal</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                        @foreach($pengajuan as $peng)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$peng->no_pengajuan}}</td>
                                <td>{{$peng->no_anggota}}</td>
                                <td>{{$peng->nama_anggota}}</td>
                                <td>{{$peng->nominal}}</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a class="btn btn-info btn-xs" href="{{ route('data-pengajuan.show', $peng->id)}}">Show</a>
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
