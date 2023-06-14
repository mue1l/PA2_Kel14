@extends('theme.app.main')
@section('title', 'login')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url('{{ asset('assets/images/bg(4).jpg') }}');">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1>Riwayat Peminjaman</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="#">Beranda</a></li>
                    <li>Layanan Pustaka</li>
                    <li>Pertanian</li>
                    <li>Peminjaman Alat</li>
                    <li>Riwayat Peminjaman</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="team-section sec-pad bg-color-1">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
        <div class="auto-container">
            <div class="sec-title">
                <h6><i class="flaticon-star"></i><span>Desa Sipahutar</span></h6>
                <h2>Riwayat Peminjaman anda</h2>
                <div class="title-shape"></div>
                <a href="{{ url('barang') }}" class="theme-btn">Pinjam Alat Tani</a>
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
                                                <th>Alamat</th>
                                                <th>Nama Alat</th>
                                                <th>Jumlah Peminjaman</th>
                                                <th>Tanggal Peminjaman</th>
                                                <th>Tanggal Pemulangan</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($barang as $item)
                                                <tr>
                                                    <td>{{ $item->user->name }}</td>
                                                    <td>{{ $item->user->alamat }}</td>
                                                    <td>{{ $item->namaalat }}</td>
                                                    <td>{{ $item->jumlah }}</td>
                                                    <td>{{ $item->tanggal_peminjaman }}</td>
                                                    <td>{{ $item->tanggal_pemulangan }}</td>
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
