@extends('layouts.admin')
@section('titel', 'ADU - admin')
@section('judul', 'Dahsboard')
    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css"
            integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w=="
            crossorigin="anonymous"/>
    @endpush

    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
            integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                var status = [];
                $.ajax({
                    url: "{{ route('dashboard.ajax') }}",
                    type: "POST",
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        array = data.data;
                        console.log(array);
                        for (let i = 0; i < array.length; i++) {
                            status.push(array[i]);
                        }
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
                var chartCanvas = document.getElementById("myChart");
                Chart.defaults.global.defaultFontSize = 14;

                var chartData = {
                    labels: [
                        "Pending",
                        "Proses",
                        "Selesai"
                    ],
                    datasets: [{
                        data: status,
                        backgroundColor: [
                            "#fc544b",
                            "#6777ef",
                            "#63ED7A"
                        ]
                    }]
                };

                var pieChart = new Chart(chartCanvas, {
                    type: 'pie',
                    data: chartData
                });
            });

        </script>
    @endpush

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
            <div class="mb-5">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <canvas id="myChart" height="240px"></canvas>
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

            <div class="card">
                <div class="card-header">
                    <h4>Foto pengaduan terbaru</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="row gutters-sm">
                            @foreach ($gambar as $p => $v)
                                <div class="col-12 col-sm-4">
                                    <label class="imagecheck mb-4">
                                        <input name="imagecheck" value="1" class="imagecheck-input" />
                                        <figure class="imagecheck-figure">
                                            @if ($v->foto != null)
                                                <img src="{{ Storage::url($v->foto) }}"
                                                    alt="{{ 'Foto ' . $v->isi_laporan }}" class="imagecheck-image">
                                            @endif
                                        </figure>
                                    </label>
                                </div>
                            @endforeach
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
                    <div class="card-description">Laporan masyarakat terbaru</div>
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
