@extends('theme.admin.main')
@section('title', 'datapenduduk')
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
                        <form class="forms-sample" action="{{ route('admin.datapenduduk.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Pilih Umur</label>
                                <select class="form-select" name="umur"
                                    class="form-control @error('umur') is-invalid @enderror" id="exampleFormControlSelect1"
                                    value="{{ old('umur') }}">
                                    <option selected disabled>Pilih Umur</option>
                                    <option>0-5</option>
                                    <option>5-10</option>
                                    <option>11-15</option>
                                    <option>16-22</option>
                                    <option>23-30</option>
                                    <option>31-50</option>
                                    <option>51-60</option>
                                    <option>61-69</option>
                                    <option>Diatas 70</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah penduduk</label>
                                <input type="number" name="Jumlah_penduduk"
                                    class="form-control @error('Jumlah_penduduk') is-invalid @enderror"
                                    placeholder="Masukkan Jumlah Penduduk" value="{{ old('Jumlah_penduduk') }}">
                            </div>
                            @error('Jumlah_penduduk')
                                <span class="alert alert-danger">
                                    {{ $message }}
                                </span>
                            @enderror

                            <button type="submit" class="btn btn-primary me-2">Tambah</button>
                            <a href="{{ route('admin.datapenduduk.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
