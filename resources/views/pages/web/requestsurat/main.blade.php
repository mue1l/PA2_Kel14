@extends('theme.app.main')
@section('title', 'login')
@section('content')
    <section class="page-title" style="background-image:url('{{ asset('assets/images/bg(1).jpg') }}');">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1>Request Surat</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Beranda</a></li>
                    <li>Request Surat</li>
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
                <h2>Request Surat</h2>
                <div class="title-shape"></div>
                <i class="flaticon-star"></i>
                <a href="{{ url('show_surat') }}" class="theme-btn">Request Surat</a>
                <br>
                <h4>Riwayat Request Surat</h4>
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
                                                <th>Nomor HP</th>
                                                <th>email</th>
                                                <th>Permintaan surat</th>
                                                <th>Tujuan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($request_surat as $item)
                                                <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->alamat }}</td>
                                                    <td>{{ $item->nomorhp }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->deskripsi }}</td>
                                                    <td>{{ $item->tujuan }}</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td>
                                                        <a href="{{ asset('uploads/surat/' . $item->file_path) }}"
                                                            target="_blank">Download</a>
                                                    </td>
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
