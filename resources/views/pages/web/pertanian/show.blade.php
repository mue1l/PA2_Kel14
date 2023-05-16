@extends('theme.app.main')
@section('title', 'login')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url('{{ asset('assets/images/bg(4).jpg') }}');">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1>Blog Grid View</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->
    <section class="services pt-100 pb-70">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3>Pertanian Desa Sipahutar</h3>
                <br>

            </div>
        </div>
    </section>
    <section class="we-are pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="why-we-img">
                        <img data-cfsrc="{{ asset('assets/images/sawah.JPG') }}" alt="image"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('assets/images/sawah.JPG') }}" alt="image"></noscript>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="why-we-text-area">
                        <div class="default-section-title">
                            <span>WHO WE ARE</span>
                            <h3>Medzo Is An Inner Metropolitan Municipality Service</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida risus commodo viverra
                                maecenas accumsan lacus vel facilisis ipsum dolor sit amet.</p>
                        </div>
                        <div class="why-we-text-list">
                            <i class="flaticon-government-building"></i>
                            <h4>Our Role Is To:</h4>
                            <p>Nulla porttitor accumsan tincidunt lorem ipsum dolor sit amet consectetur adipiscing elit
                                praesent sapien massa convallis a pellentesque nec egestas non nisi nulla porttitor accumsan
                                tincidunt.</p>
                            <ul>
                                <li>Praesent sapien massa, convallis a pellentesque nec.</li>
                                <li>Nulla porttitor accumsan tincidunt.</li>
                                <li>Ivamus suscipit tortor eget felis porttitor volutpat.</li>
                                <li>Donec rutrum congue leo eget malesuada.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h4>Hasil Pertanian di desa Sipahutar</h4>
            </div>
        </div>

        <div class="container">
            <div class="row ">

                @foreach ($hasiltani as $hasiltani)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="blog-card">
                            <div class="blog-card-text-area">
                                <div class="blog-date">
                                    <div class="img_container">
                                        <img src="/images/hasiltani/{{ $hasiltani->avatar }}" width="400" height="100"
                                            class="img-fluid" alt="Image">
                                    </div>
                                </div>
                                <div class="blog-card-text-area">
                                    <h4><a href="blog-details.html">{{ $hasiltani->nama }}</a></h4>
                                    <p
                                        style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;">
                                        {{ $hasiltani->deskripsi }}
                                    </p>
                                    <a class="read-more-btn" href="{{ route('hasiltani.show', $hasiltani->id) }}">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="paginations mt-30">
                        <ul>
                            <li><a class="active" href="projects.html">1</a></li>
                            <li><a href="projects.html">2</a></li>
                            <li><a href="projects.html">3</a></li>
                            <li><a href="projects.html"><i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h4>Alat Pertanian di desa Sipahutar</h4>
                <br>
                <button class="default-button news-btn">Pinjam alat tani</button>
            </div>
        </div>

        <div class="container">
            <div class="row ">

                @foreach ($barang as $barang)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="blog-card">
                            <div class="blog-card-text-area">
                                <div class="blog-date">
                                    <div class="img_container">
                                        <img src="/images/barang/{{ $barang->avatar }}" width="400" height="100"
                                            class="img-fluid" alt="Image">
                                    </div>
                                </div>
                                <div class="blog-card-text-area">

                                    <h4><a href="blog-details.html">{{ $barang->nama }}</a></h4>

                                    <p style="text-align: right;">
                                        Tersisa {{ $barang->jumlah }} buah
                                    </p>
                                    <button style="float: right;" class="default-button news-btn">PINJAM</button>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
