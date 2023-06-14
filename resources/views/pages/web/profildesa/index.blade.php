@extends('theme.app.main')
@section('title', 'login')
@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url('{{ asset('assets/images/bg(1).jpg') }}');">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1>PROFIL DESA</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">BERANDA</a></li>
                    <li>Profil Desa</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->
    @foreach ($profildesa as $item)
        <!-- history-section -->
        <section class="history-section">
            <figure class="image-layer"><img src="assets/images/resource/history-5.jpg" alt=""></figure>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                        <div class="sec-title">
                            <h6><i class="flaticon-star"></i><span>Sipahutar</span></h6>
                            <h2>Sejarah Desa Sipahutar</h2>
                            <div class="title-shape"></div>
                            <p>{{ $item->sejarah }}</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="single-item style-one">
                                <figure class="image-box"><img src="{{ asset('assets/images/profil2.jpg') }}"alt="">
                                </figure>
                                <div class="text">
                                    <span>SIPAHUTAR</span>
                                    <h4>VISI DESA</h4>
                                    <p>{{ $item->visi }}</p>
                                </div>
                            </div>
                            <div class="single-item style-two text-right">
                                <figure class="image-box"><img src="{{ asset('assets/images/bg(1).jpg') }}"alt="">
                                </figure>
                                <div class="text">
                                    <span>SIPAHUTAR</span>
                                    <h4>MISI DESA</h4>
                                    <p>{{ $item->misi }}</p>
                                </div>
                            </div>
                            <div class="single-item style-one">
                                <figure class="image-box"><img src="{{ asset('assets/images/bg(3).jpg') }}"alt="">
                                </figure>
                                <div class="text">
                                    <span>SIPAHUTAR</span>
                                    <h4>TENTANG DESA</h4>
                                    <p>{{ $item->tentang }}</p>
                                </div>
                            </div>
                            <div class="single-item style-two text-right">
                                <figure class="image-box"><img style="width: 6000px; height: 400px;"
                                        src="{{ asset('assets/images/profil6.png') }}"alt="">
                                </figure>
                                <div class="text">
                                    <span>SIPAHUTAR</span>
                                    <h4>GEOGRAFIS DESA</h4>
                                    <h6>Batas Wilayah kecamatan Sipahutar</h6>
                                    <p>1. Sebelah Utara: Kecamatan Siborongborong <br>2. Sebelah Selatan: Kecamatan
                                        Pangaribuan <br>3. Sebelah Barat: Kecamatan Tarutung <br>4.Sebelah Timur: Kabupaten
                                        Toba
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- history-section -->
    @endforeach
@endsection
