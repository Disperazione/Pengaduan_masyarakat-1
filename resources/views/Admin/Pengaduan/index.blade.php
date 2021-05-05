@extends('layouts.admin')
@section('titel', 'ADU - admin - pengaduan')
@section('judul', 'Pengaduan')

@section('css')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
@endsection

@section('konten')
    <table class="table table-striped" id="table-1">
        <thead>
            <tr>
                <th>#</th>
                <th>Tanggal</th>
                <th>Isi Laporan</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $p => $v)
                
            @endforeach
            <tr>
                <td>{{ $p += 1 }}</td>
                <td>{{ $v->tgl_pengaduan->format('d-M-Y') }}</td>
                <td>{{ $v->isi_laporan }}</td>
                <td>
                    @if ($v->status == '0')
                        <a href='#' class='badge badge-danger '>panding</a>
                    @elseif ($v->status == 'proses')
                        <a href='#' class='badge badge-warning'>proses</a>
                    @else
                        <a href='#' class='badge badge-success'>selesai</a>
                    @endif
                </td> 
                <td><a href="{{ route('pengaduan.show', $v->id_pengaduan) }} " class="btn btn-success">Lihat</a></td>
            </tr>
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
