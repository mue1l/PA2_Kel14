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
                        <form class="forms-sample" action="{{ route('pengajar.dataanak.update', $dataanak->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="tahun">Tahun</label>
                                <input type="number" id="tahun" name="tahun" min="2022" max="2099" class="form-control @error('Jumlah_penduduk') is-invalid @enderror"
                                placeholder="Masukkan Tahun" value="{{ $dataanak->tahun }}">
                            </div>
                            @error('tahun')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <input type="number" name="jenis_kelamin"
                                    class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                    placeholder="Masukkan Jumlah Penduduk" value="{{ $dataanak->jenis_kelamin }}">
                            </div>
                            @error('jenis_kelamin')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror


                            <div class="mb-3">
                                <label class="form-label">Jumlah Anak</label>
                                <input type="number" name="jumlah_anak"
                                    class="form-control @error('jumlah_anak') is-invalid @enderror"
                                    placeholder="Masukkan Jumlah Penduduk" value="{{ $dataanak->jumlah_anak }}">
                            </div>
                            @error('jumlah_anak')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror


                            <button type="submit" class="btn btn-primary me-2">Ubah</button>
                            <a href="{{ route('pengajar.dataanak.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
