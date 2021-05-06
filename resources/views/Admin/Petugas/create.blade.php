@extends('layouts.admin')
@section('titel', 'ADU - admin - petugas')
@section('judul', 'Tambah Petugas')

@section('css')

@endsection

@section('konten')
    <div>
        @if (Session::has('username'))
            <div class="alert alert-danger" role="alert">>
                {{ Session::get('username') }}
            </div>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
    </div>
    <div class="card">
        <form action="{{ route('petugas.store') }}" method="POST">
            @csrf
            <div class="card-header">
                <h4>Form Tambah</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_petugas">Nama Petugas</label>
                    <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="form-group">
                    <label for="telp">Telepon</label>
                    <input type="number" class="form-control" name="telp" id="telp" required>
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <div class="input-group">
                        <select name="level" id="level" class="custom-select select2">
                            <option selected value="petugas">Pilih Role (Default Petugas)</option>
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary float-right mb-3" type="submit">Tambah</button>
            </div>
        </form>
    </div>
@endsection
