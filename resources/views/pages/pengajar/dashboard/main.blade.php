@extends('theme.pengajar.main')
@section('title', 'dashboard')
<script src="https://code.highcharts.com/highcharts.js"></script>
@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <h4 class="breadcrumb-item">PENDAFTARAN</h4>
            </ol>
        </nav>

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header row">
                        <h6 class="card-title">Data Pendaftaran pada Anak PAUD tahun {{ $currentYear }}</h6>
                        <div id="chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#dataTableExample').DataTable({
            "aLengthMenu": [
                [10, 30, 50, -1],
                [10, 30, 50, "All"]
            ],
            "iDisplayLength": 10,
            "language": {
                search: ""
            }
        });
    </script>

    <script>
        Highcharts.chart('chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Pendaftran Anak Perbulan'
            },
            subtitle: {
                text: 'Desa Sipahutar'
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah (anak)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} anak</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'laki laki',
                data: [{{ $janlaki }}, {{ $feblaki }}, {{ $maretlaki }}, {{ $aprlaki }},
                    {{ $meilaki }}, {{ $junilaki }}, {{ $julilaki }}, {{ $auglaki }},
                    {{ $seplaki }}, {{ $oktlaki }}, {{ $novlaki }},
                    {{ $deslaki }}
                ]

            }, {
                name: 'Perempuan',
                data: [{{ $janperem }}, {{ $febperem }}, {{ $maretperem }},
                    {{ $aprperem }}, {{ $meiperem }}, {{ $juniperem }},
                    {{ $juliperem }}, {{ $augperem }}, {{ $sepperem }},
                    {{ $oktperem }}, {{ $novperem }},
                    {{ $desperem }}
                ]

            }]
        });
    </script>
@endsection
