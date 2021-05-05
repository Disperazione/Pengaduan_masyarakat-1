@extends('layouts.admin')
@section('titel', 'ADU - admin')
@section('judul', 'Dahsboard')
@section('konten')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Petugas</h4>
                    </div>
                    <div class="card-body">
                        {{ $petugas }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Masyarakat</h4>
                    </div>
                    <div class="card-body">
                        {{ $masyarakat }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Pengaduan Proses</h4>
                    </div>
                    <div class="card-body">
                        {{ $proses }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Pengaduan selesai</h4>
                    </div>
                    <div class="card-body">
                        {{ $selesai }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')

@endpush
