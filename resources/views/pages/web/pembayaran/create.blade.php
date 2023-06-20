@extends('theme.app.main')
@section('title', 'login')
@section('content')
    <section class="page-title" style="background-image:url('{{ asset('assets/images/bg(1).jpg') }}');">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1>Pendaftaran</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="#">Beranda</a></li>
                    <li>Pendaftaran</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="sidebar-page-container sec-pad-2">
        <div class="auto-container">
            <div class="sec-title">
                <h6><i class="flaticon-star"></i><span>Desa Sipahutar</span></h6>
                <h2>Formulir Pembayaran Anak Paud</h2>
                <div class="title-shape"></div>
                <br>
                <a href="{{ url('bayar/{bayar}') }}" class="theme-btn">lihat semua riwayat pendaftaran
                    anak
                    PAUD</a>
            </div>
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="auto-container">
                        <div class="sec-title">
                            <h6><i class="flaticon-star"></i><span></span></h6>
                            <h2></h2>
                        </div>

                        <div class="row">
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card" style="width: 600px;
                                height: 700px;">
                                    <div class="card-body">
                                        <div class="text">
                                            <h3><strong>Pembayaran</strong></h3>
                                            @if (session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                            <p><i></i></p>
                                        </div>
                                        <br>
                                        <form class="forms-sample" action="{{ route('pembayarandaftar.store') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputUsername1" class="form-label">Nama
                                                    anak</label>
                                                <input type="text" class="form-control" id="exampleInputUsername1"
                                                    autocomplete="off" name="nama_anak">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Tanggal lahir</label>
                                                <input type="date" class="form-control" id="exampleInputEmail1"
                                                    name="tanggal_lahir">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Umur Anak</label>
                                                <input type="number" class="form-control" id="exampleInputEmail1"
                                                    name="umur">
                                            </div>
                                            @error('umur')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="mb-3">
                                                <label for="exampleFormControlSelect1" class="form-label">Pilih jenis
                                                    kelamin</label>
                                                <select class="form-select" name="jenis_kelamin" class="form-control"
                                                    id="exampleFormControlSelect1">
                                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                                    <option>Laki-Laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputUsername1" class="form-label">Nama
                                                    Orang Tua</label>
                                                <input type="text" class="form-control" id="exampleInputUsername1"
                                                    autocomplete="off" name="nama_orangtua">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputUsername1" class="form-label">Alamat</label>
                                                <input type="textarea" class="form-control" id="exampleInputUsername1"
                                                    autocomplete="off" name="alamat">
                                            </div>

                                            <div class="mb-3">
                                                <label for="avatar">Upload Bukti Pembayaran</label>
                                                <input type="file" name="image" id="image"
                                                    class="form-control @error('image') is-invalid @enderror"
                                                    value="{{ old('image') }}">
                                            </div>
                                            @error('image')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                            {{-- <div class="mb-3">
                                                <label class="form-label">Upload Bukti Pembayaran</label>
                                                <input type="file" name="image"
                                                    class="form-control @error('image') is-invalid @enderror"
                                                    placeholder="Masukkan Gambar" value="{{ old('image') }}">
                                            </div>
                                            @error('image')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror --}}
                                            <button type="submit" class="btn btn-primary me-2">Kirim</button>
                                            <button class="btn btn-secondary">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <div class="title-shape"></div>
                                @foreach ($a as $item)
                                    <h3 style="color: rgb(0, 0, 125);"><b>Nama BANK : {{ $item->nama_bank }}</b></h3>
                                    <h4 style="color: rgb(173, 0, 0)"><b>No. Rekening: {{ $item->no_rekening }}</b></h4>
                                    <h6><b>Batas pembayaran : {{ $item->batas_pembayaran }}</b></h6>
                                    <br>
                                    <h4>Uang pendaftaran :</h4>
                                    <h4 style="color:gold">Rp50.000</h4>
                                @endforeach
                                <div class="title-shape"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
@endsection
