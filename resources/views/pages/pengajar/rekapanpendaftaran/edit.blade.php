@extends('theme.admin.main')
@section('title', 'datapenduduk')
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
                        <form class="forms-sample" action="{{ route('admin.datapenduduk.update', $datapenduduk->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Umur</label>
                                <input type="text" name="umur"
                                    class="form-control @error('umur') is-invalid @enderror" placeholder="Masukkan Umur"
                                    value="{{ $datapenduduk->umur }}">
                            </div>
                            @error('umur')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Jamlah penduduk</label>
                                <input type="text" name="Jumlah_penduduk"
                                    class="form-control @error('Jumlah_penduduk') is-invalid @enderror"
                                    placeholder="Masukkan Jumlah Penduduk" value="{{ $datapenduduk->Jumlah_penduduk }}">
                            </div>
                            @error('Jumlah_penduduk')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-primary me-2">Ubah</button>
                            <a href="{{ route('admin.datapenduduk.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
