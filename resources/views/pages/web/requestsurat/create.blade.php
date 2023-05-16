@extends('theme.app.main')
@section('title', 'login')
@section('content')
    <section class="page-title" style="background-image:url('{{ asset('assets/images/bg(1).jpg') }}');">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1>Request Surat</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="#">Beranda</a></li>
                    <li>Request Surat</li>
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
                            <div class="text">
                                <h3>Request surat</h3>
                                <p><i></i></p>
                            </div>
                            <form action="/request/simpan" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama : </label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Nama anda.." required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat : </label>
                                    <input type="text" class="form-control" placeholder="alamat anda.." name="alamat"
                                        id="alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Surat yang diperlukan : </label>
                                    <input type="textarea" class="form-control" name="deskripsi" id="deskripsi" required>
                                </div>
                                <div class="form-group message-btn">
                                    <button type="submit" class="theme-btn">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
