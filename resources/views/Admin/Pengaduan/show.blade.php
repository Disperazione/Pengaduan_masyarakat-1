@extends('layouts.admin')
@section('titel', 'ADU - admin - pengaduan')
@section('judul', 'Detail Pengaduan')

@section('css')

@endsection

@section('konten')
    <div class="row">
        <div class="col-12 col-sm-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>NIK : {{ $pengaduan->nik }}</h4>

                    <div class="card-header-action">
                        @if ($pengaduan->status == '0')
                            <a href='#' class='badge badge-danger '>panding</a>
                        @elseif ($pengaduan->status == 'proses')
                            <a href='#' class='badge badge-warning'>proses</a>
                        @else
                            <a href='#' class='badge badge-success'>selesai</a>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-2 text-muted">{{ $pengaduan->tgl_pengaduan }}</div>
                    <div class="mb-2">
                        <p>
                            {{ $pengaduan->isi_laporan }}
                        </p>
                    </div>
                    <div class="chocolat-parent">
                        <a href="../assets/img/example-image.jpg" class="chocolat-image" title="Just an example">
                            <div data-crop-image="285">
                                <img alt="image" src="{{ Storage::url($pengaduan->foto) }}" alt="Foto bukti"
                                    class="img-fluid">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        Tanggapan petugas
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('tanggapan.createOrUpdate') }}" method="POST">
                        @csrf
                        <input type="hidden" id="id_pengaduan" value="{{ $pengaduan->id_pengaduan }}">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <div class="input-group">
                                <select name="status" id="status" class="custom-select">
                                    @if ($pengaduan->status == '0')
                                        <option selected value="0">Panding</option>
                                        <option value="proses">Proses</option>
                                        <option value="selesai">Selesai</option>
                                    @elseif ($pengaduan->status == 'proses')
                                        <option value="0">Panding</option>
                                        <option selected value="proses">Proses</option>
                                        <option value="selesai">Selesai</option>
                                    @else
                                        <option value="0">Panding</option>
                                        <option value="proses">Proses</option>
                                        <option selected value="selesai">Selesai</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggapan">Tanggapan</label>
                            <textarea id="tanggapan" class="form-control" name="tanggapan" rows="4"
                                placeholder="belum ada tanggapan">{{ $tanggapan->$tanggapan ?? '' }}</textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Kirim</button>
                    </form>
                    @if (Session::has('status'))
                        <div class="alert alert-success mt-2">
                            {{ Session::get('status') }}
                        </div>
                    @endif
                </div>
            </div>


















            {{-- <div class="card" id="sample-login">
                <div class="card-header">
                    <h4>Beri Tanggapan</h4>
                </div>
                <form method="POST" action="{{ route('tanggapan.createOrUpdate') }}">
                    @csrf
                    <input type="hidden" id="id_pengaduan" value="{{ $pengaduan->id_pengaduan }}">
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control form-control-sm">
                                @if ($pengaduan->status == '0')
                                    <option selected value="0">Panding</option>
                                    <option value="proses">Proses</option>
                                    <option value="selesai">Selesai</option>
                                @elseif ($pengaduan->status == 'proses')
                                    <option value="0">Panding</option>
                                    <option selected value="proses">Proses</option>
                                    <option value="selesai">Selesai</option>
                                @else
                                    <option value="0">Panding</option>
                                    <option value="proses">Proses</option>
                                    <option selected value="selesai">Selesai</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggapan">Tanggapan</label>
                            <textarea class="form-control" rows="10"
                                placeholder="Tidak ada tanggapan" name="tanggapan" id="tanggapan">{{ $tanggapan->$tanggapan ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="card-footer pt-">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
                @if (Session::has('status'))
                    <div class="alert alert-success mt-2">
                        {{ Session::get('status') }}
                    </div>
                @endif
            </div> --}}
        </div>
    </div>

@endsection

@section('js')

@endsection
