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
                        <form class="forms-sample" action="{{ route('admin.datapekerjaan.update', $datapekerjaan->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Jenis Pekerjaan</label>
                                <input type="text" name="jenis_pekerjaan"
                                    class="form-control @error('jenis_pekerjaan') is-invalid @enderror" placeholder="Masukkan jenis_pekerjaan"
                                    value="{{ $datapekerjaan->jenis_pekerjaan }}">
                            </div>
                            @error('jenis_pekerjaan')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Jamlah penduduk</label>
                                <input type="text" name="jumlah"
                                    class="form-control @error('jumlah') is-invalid @enderror"
                                    placeholder="Masukkan Jumlah Penduduk" value="{{ $datapekerjaan->jumlah }}">
                            </div>
                            @error('jumlah')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-primary me-2">Ubah</button>
                            <a href="{{ route('admin.datapekerjaan.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
