@extends('layouts.user')

@section('css')
    <style>
        body {
            background: #6777ef;
        }

        .btn-purple {
            background: #6777ef;
            width: 100%;
            color: #fff;
        }

    </style>
@endsection

@section('title', 'Halaman Daftar')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                </div>

                <div class="card card-primary">
                    <div class="card-header">
                        <h4>DAFTAR</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('adu.register') }}" method="POST">
                            @csrf
                            <div class=" form-group">
                                <input type="number" name="nik" placeholder="NIK" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="number" name="telp" placeholder="No. Telp" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    REGISTER
                                </button>
                            </div>

                            @if (Session::has('pesan'))
                                <div class="alert alert-danger mt-2">
                                    {{ Session::get('pesan') }}
                                </div>
                            @endif
                            <a href="{{ route('adu.index') }}" class="btn btn-danger text-white mt-1"
                                style="width: 100%">Kembali ke
                                Halaman Utama</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <h2 class="text-center text-white mb-0 mt-5">ADU</h2>
                <P class="text-center text-white mb-5">Pengaduan Masyarakat</P>
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="text-center mb-5">FORM DAFTAR</h2>
                        <form action="{{ route('adu.register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="number" name="nik" placeholder="NIK" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="number" name="telp" placeholder="No. Telp" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-purple">REGISTER</button>
                        </form>
                    </div>
                </div>
                @if (Session::has('pesan'))
                    <div class="alert alert-danger mt-2">
                        {{ Session::get('pesan') }}
                    </div>
                @endif
                <a href="{{ route('adu.index') }}" class="btn btn-danger text-white mt-3" style="width: 100%">Kembali ke
                    Halaman Utama</a>
            </div>
        </div>
    </div> --}}
@endsection
