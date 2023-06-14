@extends('theme.pengajar.main')
@section('title', 'dashboard')
@section('content')
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
                        <h6 class="card-title">Data Pendaftaran pada Anak PAUD</h6>
                        <div class="ml-auto">
                            <a href="{{ route('pengajar.pengajar.pengajar.pengajar.pengajar.pendaftaran.export-pdf') }}"
                                class="btn btn-primary">Ekspor PDF</a>
                        </div>
                    </div>
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
                                        <th>Gambar Kartu Keluarga</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pendaftaran as $item)
                                        <tr>
                                            <td>{{ $item->nama_anak }}</td>
                                            <td>{{ $item->tanggal_lahir }}</td>
                                            <td>{{ $item->umur }}</td>
                                            <td>{{ $item->jenis_kelamin }}</td>
                                            <td>{{ $item->nama_orangtua }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>
                                                {{-- <a href="{{ route('pengajar.pengajar.pendaftaran.show') }}">Lihat gambar</a> --}}
                                                <form action="{{ route('pengajar.pengajar.pendaftaran.show', $item->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit">
                                                        Lihat Gambar
                                                    </button>
                                                </form>
                                            </td>
                                            <td>{{ $item->status }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <form action="{{ route('pengajar.pendaftaran.terima', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-warning">Terima</button>
                                                    </form>
                                                    <form action="{{ route('pengajar.pendaftaran.tolak', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-warning">Tolak</button>
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
