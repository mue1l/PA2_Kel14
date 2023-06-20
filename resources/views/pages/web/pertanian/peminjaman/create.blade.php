@extends('theme.app.main')
@section('title', 'login')
@section('content')
    <section class="page-title" style="background-image:url('{{ asset('assets/images/bg(4).jpg') }}');">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1>Peminjaman Alat Pertanian</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="#">Beranda</a></li>
                    <li>Layanan Pustaka</li>
                    <li>Pertanian</li>
                    <li>Peminjaman Alat Pertanian </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sidebar-page-container sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="auto-container">
                        <div class="sec-title">
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    <p style="color:red;">{{ session()->get('success') }}</p>

                                </div>
                            @endif
                            <h6><i class="flaticon-star"></i><span>Desa Sipahutar</span></h6>
                            <h2>Formulir Peminjaman Alat Pertanian</h2>
                            <div class="title-shape"></div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-12 col-sm-12 small-column">
                                <div class="content_block_10">
                                    <div class="content-box" style="width: 400px;">
                                        <figure class="image-layer"><img src="assets/images/icons/heart-2.png"
                                                alt=""></figure>
                                        <div class="text">
                                            @if (session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                            @if (session()->has('error'))
                                                <div style="color:red;" class="alert alert-success">
                                                    {{ session()->get('error') }}
                                                </div>
                                            @endif
                                            <h3>Pinjam disini</h3>
                                            <p><i>*harap menjaga dan mengembalikan barang tepat waktu</i></p>
                                        </div>
                                        <form action="/peminjaman/simpan" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="alamat">Nama Alat : </label>
                                                <input type="Text" class="form-control" placeholder="{{ $barang->nama }}"
                                                    name="namaalat" id="namaalat" value="{{ $barang->nama }}" required
                                                    readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="jumlah">Jumlah : </label>
                                                <input type="Number" class="form-control" placeholder="jumlah alat"
                                                    name="jumlah" id="jumlah" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tanggal_peminjaman">Tanggal Peminjaman : </label>
                                                <input type="Date" class="form-control" name="tanggal_peminjaman"
                                                    id="tanggal_peminjaman" required>
                                            </div>
                                            @error('tanggal_peminjaman')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="form-group">
                                                <label for="tanggal_pemulangan">Tanggal Pengembalian : </label>
                                                <input type="Date" class="form-control" name="tanggal_pemulangan"
                                                    id="tanggal_pemulangan" required>
                                            </div>
                                            @error('tanggal_pemulangan')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="form-group message-btn">
                                                <button type="submit" class="theme-btn">Pinjam</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
