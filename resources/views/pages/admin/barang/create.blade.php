@extends('theme.admin.main')
@section('title', 'barang')
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
                        <form class="forms-sample" action="{{ route('admin.barang.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror" id="nama"
                                    placeholder="Masukkan Nama" value="{{ old('nama') }}">
                            </div>
                            @error('nama')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label">Jumlah</label>
                                <input type="number" name="jumlah"
                                    class="form-control @error('jumlah') is-invalid @enderror" id="jumlah"
                                    placeholder="Masukkan jumlah barang" value="{{ old('jumlah') }}">
                            </div>
                            @error('jumlah')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="avatar"
                                    class="form-control @error('avatar') is-invalid @enderror" id="avatar"
                                    placeholder="Masukkan Gambar" value="{{ old('avatar') }}">
                            </div>
                            @error('avatar')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-primary me-2">Tambah</button>
                            <a href="{{ route('admin.barang.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
