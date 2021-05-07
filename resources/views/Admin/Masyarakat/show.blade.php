@extends('layouts.admin')
@section('titel', 'ADU - admin - pengaduan')
@section('judul', 'Detail Masyarakat')

@section('css')

@endsection

@section('konten')
    <div class="row">
        <div class="col-12 col-sm-6 col-lg-6">
            <div class="card" id="mycard-dimiss">
                <div class="card-header">
                    <h4>{{ $masyarakat->nik }}</h4>
                    <div class="card-header-action">
                        <a class="btn btn-icon btn-danger" href="{{ route('masyarakat.index') }}"><i
                                class="fas fa-times"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <p>Nama : {{ $masyarakat->nama }}</p>
                    <p>Username : {{ $masyarakat->username }}</p>
                    <p>No Telepon : {{ $masyarakat->telp }}</p>
                </div>
            </div>
        </div>
        
        <div class="col-12 col-sm-6 col-lg-6">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
