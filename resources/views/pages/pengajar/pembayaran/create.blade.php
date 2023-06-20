@extends('theme.pengajar.main')
@section('title', 'pembayaran')
@section('content')




    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">

            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Form</h6>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" action="{{ route('pengajar.pembayaran.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama BANK :</label>
                                <input type="text" name="nama_bank"
                                    class="form-control @error('nama_bank') is-invalid @enderror"
                                    placeholder="Masukkan Nama BANK" value="{{ old('nama_bank') }}">
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
                                    placeholder="Masukkan Nomor rekening" value="{{ old('no_rekening') }}">
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
                                    value="{{ old('batas_pembayaran') }}">
                            </div>
                            @error('batas_pembayaran')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-primary me-2">Tambah</button>
                            <a href="{{ route('pengajar.pembayaran.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
