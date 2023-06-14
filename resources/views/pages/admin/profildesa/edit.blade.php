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
                        <form class="forms-sample" action="{{ route('admin.profildesa.update', $profildesa->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <div class="col-lg-8">
                                    <textarea type="textarea" name="tentang desa" class="form-control @error('tentang desa') is-invalid @enderror"
                                        id="tentang desa" placeholder="Masukkan tentang desa" id="tentang desa" value="{{ $profildesa->tentang }} "></textarea>
                                </div>
                            </div>
                            @error('tentang desa')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <div class="mb-3">
                                <div class="col-lg-8">
                                    <textarea type="textarea" name="sejarah" class="form-control @error('sejarah') is-invalid @enderror" id="sejarah"
                                        placeholder="Masukkan sejarah" id="sejarah" value="{{ $profildesa->sejarah }} "></textarea>
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
                                        placeholder="Masukkan visi" id="visi" value="{{ $profildesa->visi }} "></textarea>
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
                                        placeholder="Masukkan misi" id="misi" value="{{ $profildesa->misi }} "></textarea>
                                </div>
                            </div>
                            @error('misi')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-primary me-2">Ubah</button>
                            <a href="{{ route('admin.profildesa.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
