@extends('theme.admin.main')
@section('title', 'hasiltani')
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
                        <form class="forms-sample" action="{{ route('admin.hasiltani.update', $hasiltani->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama"
                                    id="nama" value="{{ $hasiltani->nama }}">
                            </div>
                            @error('nama')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="avatar"
                                    class="form-control @error('avatar') is-invalid @enderror" placeholder="Masukkan Gambar"
                                    id="avatar" value="{{ $hasiltani->avatar }}">
                            </div>
                            @error('avatar')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <div class="mb-3">
                                <div class="col-lg-8">
                                    <textarea type="textarea" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                                        placeholder="Masukkan deskripsi" id="deskripsi" value="{{ $hasiltani->deskripsi }} "></textarea>
                                </div>
                            </div>
                            @error('deskripsi')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror


                            <button type="submit" class="btn btn-primary me-2">Ubah</button>
                            <a href="{{ route('admin.hasiltani.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
