@extends('theme.admin.main')
@section('title', 'datapekerjaan')
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
                        <form class="forms-sample" action="{{ route('admin.datapekerjaan.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Jenis Pekerjaan</label>
                                <input type="text" name="jenis_pekerjaan"
                                    class="form-control @error('jenis_pekerjaan') is-invalid @enderror"
                                    placeholder="Masukkan jenis pekerjaan penduduk" value="{{ old('jenis_pekerjaan') }}">
                            </div>
                            @error('jenis_pekerjaan')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Jumlah penduduk</label>
                                <input type="number" name="jumlah"
                                    class="form-control @error('jumlah') is-invalid @enderror"
                                    placeholder="Masukkan Jumlah Penduduk" value="{{ old('jumlah') }}">
                            </div>
                            @error('jumlah')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <button type="submit" class="btn btn-primary me-2">Tambah</button>
                            <a href="{{ route('admin.datapekerjaan.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
