@extends('theme.admin.main')
@section('title', 'datajeniskelamin')
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
                        <form class="forms-sample"
                            action="{{ route('admin.datajeniskelamin.update', $datajeniskelamin->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin"
                                    class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                    placeholder="Masukkan jenis kelamin" value="{{ $datajeniskelamin->jenis_kelamin }}" readonly>
                            </div>
                            @error('jenis_kelamin')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Jamlah penduduk sesuai gender</label>
                                <input type="number" name="jumlah"
                                    class="form-control @error('jumlah') is-invalid @enderror"
                                    placeholder="Masukkan Jumlah Penduduk" value="{{ $datajeniskelamin->jumlah }}">
                            </div>
                            @error('jumlah')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-primary me-2">Ubah</button>
                            <a href="{{ route('admin.datajeniskelamin.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
