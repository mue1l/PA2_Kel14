@extends('theme.pengajar.main')
@section('title', 'dataanak')
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
                        <form class="forms-sample" action="{{ route('pengajar.dataanak.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="tahun">Tahun</label>
                                <input type="number" id="tahun" name="tahun" min="2022" max="2099"
                                    class="form-control @error('Jumlah_penduduk') is-invalid @enderror"
                                    placeholder="Masukkan Tahun" value="{{ old('tahun') }}">
                            </div>
                            @error('tahun')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Pilih jenis kelamin</label>
                                <select class="form-select" name="jenis_kelamin"
                                    class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                    id="exampleFormControlSelect1" value="{{ old('jenis_kelamin') }}">
                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jumlah Anak</label>
                                <input type="number" name="jumlah_anak"
                                    class="form-control @error('jumlah_anak') is-invalid @enderror"
                                    placeholder="Masukkan Jumlah Penduduk" value="{{ old('jumlah_anak') }}">
                            </div>
                            @error('jumlah_anak')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <button type="submit" class="btn btn-primary me-2">Tambah</button>
                            <a href="{{ route('pengajar.dataanak.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
