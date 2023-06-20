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
                        <form class="forms-sample" action="{{ route('admin.datajeniskelamin.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Pilih Jenis Kelamin</label>
                                <select class="form-select" name="jenis_kelamin"
                                    class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                    id="exampleFormControlSelect1" value="{{ old('jenis_kelamin') }}">
                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah penduduk sesuai gender</label>
                                <input type="number" name="jumlah"
                                    class="form-control @error('jumlah') is-invalid @enderror"
                                    placeholder="Masukkan Jumlah penduduk sesuai gender" value="{{ old('jumlah') }}">
                            </div>
                            @error('jumlah')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <button type="submit" class="btn btn-primary me-2">Tambah</button>
                            <a href="{{ route('admin.datajeniskelamin.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
