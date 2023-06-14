@extends('theme.admin.main')
@section('title', 'perangkat')
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
                        <form class="forms-sample" action="{{ route('admin.perangkat.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama"
                                    value="{{ old('name') }}">
                            </div>
                            @error('name')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror"
                            <div class="mb-3">
                                <label class="form-label">Posisi</label>
                                <input type="text" name="position"
                                    class="form-control @error('position') is-invalid @enderror"
                                    placeholder="Masukkan Posisi" value="{{ old('position') }}">
                            </div>
                            @error('position')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" name="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    placeholder="Masukkan Alamat" value="{{ old('address') }}">
                            </div>
                            @error('address')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="avatar"
                                    class="form-control @error('avatar') is-invalid @enderror" placeholder="Masukkan Gambar"
                                    value="{{ old('avatar') }}">
                            </div>
                            @error('avatar')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-primary me-2">Tambah</button>
                            <a href="{{ route('admin.perangkat.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
