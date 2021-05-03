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
                        <form action="{{ route('admin.login') }}" method="POST">
                            @csrf
                            <div class=" form-group">
                                <input type="text" name="username" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Passworld" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Login
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
@endsection
