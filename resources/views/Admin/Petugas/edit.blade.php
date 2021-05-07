@extends('layouts.admin')
@section('titel', 'ADU - admin - petugas')
@section('judul', 'Edit Data Petugas')

@push('css')

@endpush

@section('konten')
    <div class="card">
        <form action="{{ route('petugas.destroy', $petugas->id_petugas) }}" method="POST"
            id="hapus{{ route('petugas.destroy', $petugas->id_petugas) }}">
            @csrf
            @method('DELETE')
        </form>
        <form action="{{ route('petugas.update', $petugas->id_petugas) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="card-header">
                <h4>Form Edit</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_petugas">Nama Petugas</label>
                    <input type="text" class="form-control" name="nama_petugas" id="nama_petugas"
                        value="{{ $petugas->nama_petugas }}" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" value="{{ $petugas->username }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="form-group">
                    <label for="telp">Telepon</label>
                    <input type="number" class="form-control" name="telp" id="telp" value="{{ $petugas->telp }}" required>
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <div class="input-group">
                        <select name="level" id="level" class="custom-select select2">
                            @if ($petugas->level == 'admin')
                                <option value="admin" selected>Admin</option>
                                <option value="petugas">Petugas</option>
                            @else
                                <option value="admin">Admin</option>
                                <option value="petugas" selected>Petugas</option>
                            @endif
                        </select>
                    </div>
                </div>
                <button class="btn btn-success float-right mb-3" type="submit">Update</button>
                <button class="btn btn-danger float-right mb-3 mr-2" type="submit"
                    form="hapus{{ route('petugas.destroy', $petugas->id_petugas) }}">Hapus</button>
            </div>
        </form>
    </div>
@endsection
