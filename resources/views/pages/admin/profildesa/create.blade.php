@extends('theme.admin.main')
@section('title', 'profildesa')
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
                        <form class="forms-sample" action="{{ route('admin.profildesa.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <div class="col-lg-8">
                                    <textarea type="textarea" name="tentang" class="form-control @error('tentang') is-invalid @enderror" id="tentang"
                                        placeholder="Masukkan tentang desa" value="{{ old('tentang') }}"></textarea>
                                </div>
                            </div>
                            @error('tentang')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <div class="mb-3">
                                <div class="col-lg-8">
                                    <textarea type="textarea" name="sejarah" class="form-control @error('sejarah') is-invalid @enderror" id="sejarah"
                                        placeholder="Masukkan sejarah" value="{{ old('sejarah') }}"></textarea>
                                </div>
                            </div>
                            @error('sejarah')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <div class="mb-3">
                                <div class="col-lg-8">
                                    <textarea type="textarea" name="visi" class="form-control @error('visi') is-invalid @enderror" id="visi"
                                        placeholder="Masukkan visi" value="{{ old('visi') }}"></textarea>
                                </div>
                            </div>
                            @error('visi')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <div class="mb-3">
                                <div class="col-lg-8">
                                    <textarea type="textarea" name="misi" class="form-control @error('misi') is-invalid @enderror" id="misi"
                                        placeholder="Masukkan misi" value="{{ old('misi') }}"></textarea>
                                </div>
                            </div>
                            @error('misi')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <button type="submit" class="btn btn-primary me-2">Tambah</button>
                            <a href="{{ route('admin.profildesa.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
