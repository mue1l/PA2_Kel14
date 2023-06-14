@extends('theme.admin.main')
@section('title', 'peminjaman')
@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
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
                        <h6 class="card-title">Data Table</h6>
                        <div class="ml-auto">
                            <a href="{{ route('admin.admin.admin.admin.admin.peminjaman.export-pdf') }}"
                                class="btn btn-primary">Ekspor PDF</a>
                        </div>
                    </div>
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
                                        <th>Aksi</th>
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
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <form action="{{ route('admin.pinjam.terima', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-warning">Terima</button>
                                                    </form>
                                                    <form action="{{ route('admin.pinjam.tolak', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-warning">Tolak</button>
                                                    </form>
                                                    <form action="{{ route('admin.pinjam.denda', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-warning">Denda</button>
                                                    </form>
                                                </div>
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
@endsection
