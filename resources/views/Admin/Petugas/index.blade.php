@extends('layouts.admin')
@section('titel', 'ADU - admin - Petugas')
@section('judul', 'Data Petugas')

@section('css')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
@endsection

@section('konten')
    <a href="{{ route('petugas.create') }}" class="btn btn-primary mb-3">Tambah data <i class="fas fa-plus-circle"></i></a>
    <table class="table table-striped" id="table-1">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama petugas</th>
                <th>Username</th>
                <th>Telepon</th>
                <th>Level</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($petugas as $p => $v)
            <tr>
                <td>{{ $p += 1 }}</td>
                <td>{{ $v->nama_petugas }}</td>
                <td>{{ $v->username }}</td>
                <td>{{ $v->telp }}</td>
                <td>{{ $v->level }}</td>
                <td>
                    <a href="{{ route('petugas.edit',$v->id_petugas) }}" class="btn btn-success btn-sm">Lihat</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection



@section('js')
    <!-- JS Libraies -->
    <script src="../node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/modules-datatables.js"></script>
@endsection
