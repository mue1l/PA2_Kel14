@extends('theme.admin.main')
@section('title', 'dashboard')
<script src="https://code.highcharts.com/highcharts.js"></script>
@section('content')
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Dashboard</h4>
            </div>
            <div class="col-md-5 d-flex justify-content-md-end">
                <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-primary"><a
                            href="{{ url('admin/dashboard') }}">Umur</a></button>
                    <button type="button" class="btn btn-outline-primary"><a
                            href="{{ url('admin/datajeniskelamin/{datajeniskelamin}') }}">Jenis Kelamin</a></button>
                    <button type="button" class="btn btn-outline-primary"><a
                            href="{{ url('admin/datapekerjaan/{datapekerjaan}') }}">Pekerjaan</a></button>
                </div>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                    <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i
                            data-feather="calendar" class="text-primary"></i></span>
                    <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date"
                        data-input>
                </div>
                {{-- <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="printer"></i>
                    Print
                </button> --}}
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div id="container">
                            <div id="chartContainer" style="width: 600px; height: 400px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div>
    <script>
        var chartData = <?php echo json_encode($chartPekerjaan); ?>;

        Highcharts.chart('chartContainer', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Chart Penduduk Berdasarkan Pekerjaan'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b>'
            },
            series: [{
                name: 'Jumlah',
                colorByPoint: true,
                data: chartData
            }]
        });
    </script>
@endsection
