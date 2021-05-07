@extends('layouts.admin')
@section('titel', 'ADU - admin - Masyarakat')
@section('judul', 'Data Masyarakat')

@push('css')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
@endpush

@section('konten')
    <table class="table table-striped" id="table-1">
        <thead>
            <tr>
                <th>#</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Telepon</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($masyarakat as $m => $v)
            <tr>
                <td>{{ $m += 1 }}</td>
                <td>{{ $v->nik }}</td>
                <td>{{ $v->nama }}</td>
                <td>{{ $v->username }}</td>
                <td>{{ $v->telp }}</td>
                <td>
                    <a href="{{ route('masyarakat.show',$v->nik) }}" class="btn btn-success btn-sm">Lihat</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection



@push('js')
    <!-- JS Libraies -->
    <script src="../node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/modules-datatables.js"></script>
@endpush