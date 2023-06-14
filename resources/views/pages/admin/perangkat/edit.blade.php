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
                        <form class="forms-sample" action="{{ route('admin.perangkat.update', $perangkat->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama"
                                    value="{{ $perangkat->name }}">
                            </div>
                            @error('name')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Posisi</label>
                                <input type="text" name="position"
                                    class="form-control @error('position') is-invalid @enderror"
                                    placeholder="Masukkan Posisi" value="{{ $perangkat->position }}">
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
                                    placeholder="Masukkan Alamat" value="{{ $perangkat->address }}">
                            </div>
                            @error('address')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="avatar"
                                    class="form-control @error('avatar') is-invalid @enderror"
                                    placeholder="Masukkan Gambar">
                            </div>
                            @error('avatar')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-primary me-2">Ubah</button>
                            <a href="{{ route('admin.perangkat.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
