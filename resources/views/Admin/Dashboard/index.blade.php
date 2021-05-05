@extends('layouts.admin')
@section('titel', 'ADU - admin')
@section('judul', 'Dahsboard')
@section('konten')
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">
                        <h4 class="text-primary">Pengaduan</h4>
                    </div>
                    <div class="card-stats-items">
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{ $pending }}</div>
                            <div class="card-stats-item-label">Pending</div>
                        </div>
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{ $proses }}</div>
                            <div class="card-stats-item-label">Terproses</div>
                        </div>

                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{ $selesai }}</div>
                            <div class="card-stats-item-label">Terselasikan</div>
                        </div>
                    </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Pengaduan</h4>
                    </div>
                    <div class="card-body">
                        {{ $pengaduan1 }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
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
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-hero">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="far fa-question-circle"></i>
                    </div>
                    <h4>{{ $pengaduan1 }}</h4>
                    <div class="card-description">Laporan masyarakat</div>
                </div>
                <div class="card-body p-0">
                    @foreach ($pengaduan as $p => $v)
                    <div class="tickets-list">
                        <a href="#" class="ticket-item">
                            <div class="ticket-title">
                                <h4>{{ $v->isi_laporan }}</h4>
                            </div>
                            <div class="ticket-info">
                                <div>NIK :{{ $v->nik }}</div>
                                <div class="bullet"></div>
                                <div class="text-primary">{{ $v->tgl_pengaduan->format('d-M-Y') }}</div>
                            </div>
                        </a>
                        @endforeach
                        <a href="{{ route('pengaduan.index') }}" class="ticket-item ticket-more">
                            View All <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
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
    </div> --}}
@endsection


@push('js')

@endpush
