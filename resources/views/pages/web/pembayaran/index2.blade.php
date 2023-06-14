@extends('theme.app.main')
@section('title', 'login')
@section('content')
    <section class="page-title" style="background-image:url('{{ asset('assets/images/bg(1).jpg') }}');">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1>Riwayat</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Beranda</a></li>
                    <li>Riwayat Pendaftaran</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="team-section sec-pad bg-color-1">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
        <div class="auto-container">
            <div class="sec-title">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <h2>Riwayat Pendaftaran Anak Anda</h2>
                <div class="title-shape"></div>
                <i class="flaticon-star"></i>
                <<a href="{{ url('bayar/{bayar}') }}" class="theme-btn">lihat semua riwayat pendaftaran
                    anak
                    PAUD</a>
                    <br>
                    <h4>Riwayat Pendaftaran</h4>
            </div>
            <div class="page-content">

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dataTableExample" class="table">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Umur</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Nama Orang Tua</th>
                                                <th>Alamat</th>
                                                <th>Status Pendaftaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($riwayatanak as $item)
                                                <tr>
                                                    <td>{{ $item->nama_anak }}</td>
                                                    <td>{{ $item->tanggal_lahir }}</td>
                                                    <td>{{ $item->umur }} tahun</td>
                                                    <td>{{ $item->jenis_kelamin }}</td>
                                                    <td>{{ $item->nama_orangtua }}</td>
                                                    <td>{{ $item->alamat }}</td>
                                                    <td>{{ $item->status }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        @section('custom_js')
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

        </div>
    </section>

@endsection
