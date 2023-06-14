@extends('theme.pengajar.main')
@section('title', 'pengaturanpendaftaran')
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
                        <form class="forms-sample"
                            action="{{ route('pengajar.pengaturanpendaftaran.update', $pengaturanpendaftaran->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Status Pendaftaran :</label>
                                <select class="form-control @error('status_pendaftaran') is-invalid @enderror"
                                    name="status_pendaftaran" id="exampleFormControlSelect1"
                                    value="{{ $pengaturanpendaftaran->status_pendaftaran }}">
                                    <option>tutup, </option>
                                    <option>buka</option>
                                </select>
                            </div>
                            @error('status_pendaftaran')
                                <span class="alert
                                    alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label">Batas Penutupan Pendaftaran :</label>
                                <input type="date" name="batas_tutup"
                                    class="form-control @error('batas_tutup') is-invalid @enderror"
                                    placeholder="Masukkan Posisi" value="{{ $pengaturanpendaftaran->batas_tutup }}">
                            </div>
                            @error('batas_tutup')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <button type="submit" class="btn btn-primary me-2">Ubah</button>
                            <a href="{{ route('pengajar.pengaturanpendaftaran.index') }}"
                                class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
