@extends('theme.pengajar.main')
@section('title', 'pembayaran')
@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Form</h6>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" action="{{ route('pengajar.pembayaran.update', $pembayaran->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="nama_bank"
                                    class="form-control @error('nama_bank') is-invalid @enderror"
                                    placeholder="Masukkan Nama" value="{{ $pembayaran->nama_bank }}">
                            </div>
                            @error('nama_bank')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label">Nomor Rekening :</label>
                                <input type="number" name="no_rekening"
                                    class="form-control @error('no_rekening') is-invalid @enderror"
                                    placeholder="Masukkan Posisi" value="{{ $pembayaran->no_rekening }}">
                            </div>
                            @error('no_rekening')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Batas Pembayaran :</label>
                                <input type="date" name="batas_pembayaran"
                                    class="form-control @error('batas_pembayaran') is-invalid @enderror"
                                    placeholder="Masukkan Alamat" value="{{ $pembayaran->batas_pembayaran }}">
                            </div>
                            @error('batas_pembayaran')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <button type="submit" class="btn btn-primary me-2">Ubah</button>
                            <a href="{{ route('pengajar.pembayaran.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
