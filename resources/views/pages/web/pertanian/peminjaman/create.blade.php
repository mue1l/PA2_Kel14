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
                    <li>Peminjaman Alat Pertanian   </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="donation-section sec-pad">
        <div class="auto-container">
            <div class="sec-title">
                <h6><i class="flaticon-star"></i><span>Desa Sipahutar</span></h6>
                <h2>Formulir Peminjaman Alat Pertanian</h2>
                <div class="title-shape"></div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 small-column">
                    <div class="content_block_10">
                        <div class="content-box">
                            <figure class="image-layer"><img src="assets/images/icons/heart-2.png" alt=""></figure>
                            <div class="text">
                                <h3>Pinjam disini</h3>
                                <p><i>*harap menjaga dan mengembalikan barang tepat waktu</i></p>
                            </div>
                            <form action="/peminjaman/simpan" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="alamat">Nama Alat : </label>
                                    <input type="Text" class="form-control" placeholder="{{ $barang->nama }}"
                                        name="namaalat" id="namaalat" value="{{ $barang->nama }}" required readonly>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah : </label>
                                    <input type="Number" class="form-control" placeholder="jumlah alat" name="jumlah"
                                        id="jumlah" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_peminjaman">Tanggal Peminjaman : </label>
                                    <input type="Date" class="form-control" name="tanggal_peminjaman"
                                        id="tanggal_peminjaman" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_pemulangan">Tanggal Pengembalian : </label>
                                    <input type="Date" class="form-control" name="tanggal_pemulangan"
                                        id="tanggal_pemulangan" required>
                                </div>
                                <div class="form-group message-btn">
                                    <button type="submit" class="theme-btn">Pinjam</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--
    <div class="contact-area default-padding">
        <div class="auto-container mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12"
                        style="margin-left: auto;
                    margin-right: auto;">
                        <div class="log-in-card">
                            <div class="default-section-title">
                                <h3>Pinjam Alat Pertanian di sini</h3>
                            </div>
                            <div class="login-form">
                                <form action="/peminjaman/simpan" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="alamat">Nama Alat : </label>
                                        <input type="Text" class="form-control" placeholder="{{ $barang->nama }}"
                                            name="namaalat" id="namaalat" value="{{ $barang->nama }}" required readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jumlah">Jumlah : </label>
                                        <input type="Number" class="form-control" placeholder="jumlah alat" name="jumlah"
                                            id="jumlah" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_peminjaman">Tanggal Peminjaman : </label>
                                        <input type="Date" class="form-control" name="tanggal_peminjaman"
                                            id="tanggal_peminjaman" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_pemulangan">Tanggal Pengembalian : </label>
                                        <input type="Date" class="form-control" name="tanggal_pemulangan"
                                            id="tanggal_pemulangan" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Pinjam</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
