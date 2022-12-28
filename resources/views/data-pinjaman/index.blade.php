@extends('adminlte::page')

@section('title', 'List User')

@section('content_header')
    <h1 class="m-0 text-dark">Data Pinjaman</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('data-pinjaman.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            {{-- <th>Nama</th> --}}
                            <th>Kode Pinjaman</th>
                            {{-- <th>Tgl Pinjam</th> --}}
                            <th>No.Anggota</th>
                            <th>Lama Angsuran</th>
                            <th>Total Tagihan</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                        @foreach($pinjaman as $pinj)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$pinj->no_pinjaman}}</td>
                                {{-- <td>{{$pinj->no_pengajuan}}</td> --}}
                                {{-- <td>{{$pinj->tanggal_pinjam}}</td> --}}
                                <td>{{$pinj->no_anggota}}</td>
                                <td>{{$pinj->lama_angsuran}}</td>
                                <td>{{$pinj->total_tagihan}}</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a class="btn btn-info btn-xs" href="{{ route('data-pinjaman.show', $pinj->id)}}">Show</a>
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
