@extends('theme.pengajar.main')
@section('title', 'pendaftaran')
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
                        <form class="forms-sample" action="{{ route('pengajar.pengaturanpendaftaran.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Status Pendaftaran :</label>
                                <input type="text" name="status_pendaftaran"
                                    class="form-control @error('status_pendaftaran') is-invalid @enderror"
                                    placeholder="Masukkan Nama BANK" value="{{ old('status_pendaftaran') }}">
                            </div>
                            @error('status_pendaftaran')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label">Batas Pendaftaran :</label>
                                <input type="date" name="batas_tutup"
                                    class="form-control @error('batas_tutup') is-invalid @enderror"
                                    placeholder="Masukkan Nomor rekening" value="{{ old('batas_tutup') }}">
                            </div>
                            @error('batas_tutup')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <button type="submit" class="btn btn-primary me-2">Tambah</button>
                            <a href="{{ route('pengajar.pengaturanpendaftaran.index ') }}"
                                class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
