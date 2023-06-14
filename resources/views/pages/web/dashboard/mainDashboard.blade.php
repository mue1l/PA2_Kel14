@extends('theme.app.main')
@section('title', 'login')
@section('content')

    <section class="banner-section style-one">
        @foreach ($profil as $item)
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url('{{ asset('assets/images/bg(2).jpg') }}');"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h6><i class="flaticon-star"></i>SIPAHUTAR</h6>
                            <h1>VISI DESA</h1>
                            <p>{{ $item->visi }}</p>
                            <div class="btn-box">
                                <a href="{{ url('/profildesa') }}" class="theme-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url('{{ asset('assets/images/bg(1).jpg') }}');"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h6><i class="flaticon-star">SIPAHUTAR</i></h6>
                            <h1>MISI DESA</h1>
                            <p
                                style="display: -webkit-box;
                            -webkit-line-clamp: 2;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;">
                                {{ $item->misi }}</p>
                            <div class="btn-box">
                                <a href="{{ url('/profildesa') }}" class="theme-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url('{{ asset('assets/images/bg(6).jpg') }}');"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h6><i class="flaticon-star"></i>SIPAHUTAR</h6>
                            <h1>TENTANG DESA</h1>
                            <p>{{ $item->tentang }}</p>
                            <div class="btn-box">
                                <a href="{{ url('/profildesa') }}" class="theme-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <section class="activities-section centred bg-color-1">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="icon-box"><i style="color: red;" class="mdi mdi-information"></i></div>
                            <h6>Informasi</h6>
                            <h4>Informasi Desa</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-parking"></i></div>
                            <h6>Request</h6>
                            <h4>Request Surat</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-school"></i></div>
                            <h6>Sekolah</h6>
                            <h4>Pendaftaran PAUD</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-taxes"></i></div>
                            <h6>Peminjaman</h6>
                            <h4>Peminjaman Alat</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about-section -->
    <section class="about-section sec-pad bg-color-1">
        @foreach ($profil as $item)
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h6><i class="flaticon-star"></i><span>Selamat Datang di Desa Sipahutar</span></h6>
                                    <h2>Sejarah Sipahutar</h2>
                                    <div class="title-shape"></div>
                                </div>

                                <div class="text">

                                    <p
                                        style="display: -webkit-box;
                                        -webkit-line-clamp: 20;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                                        text-overflow: ellipsis;">
                                        {{ $item->sejarah }}</p>
                                </div>
                                <div class="btn-box">
                                    <a href="{{ url('/profildesa') }}" class="theme-btn">Lihat lebih banyak</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_1">
                            <div class="image-box">
                                <figure class="image"><img style="height:700px; width: 700px;"
                                        src="{{ asset('assets/images/profil2.jpg') }}" alt="">
                                </figure>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </section>
    <!-- about-section end -->

    <section class="explore-section centred bg-color-2">

        <div class="auto-container">
            <div class="sec-title centred light">
                <h6><i class="flaticon-star"></i><span>Galeri</span><i class="flaticon-star"></i></h6>
                <h2>Galeri Desa Sipahutar</h2>
                <div class="title-shape"></div>
            </div>
            <br><br>
            <div class="row clearfix">
                @php
                    $counter = 0;
                @endphp
                @foreach ($galeri as $item)
                    @php
                        $counter++;
                    @endphp
                    <div class="col-lg-4 col-md-6 col-sm-12 explore-block">
                        <div class="explore-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img style="height: 500px; width:400px;"
                                        src="/images/galeri/{{ $item->avatar }}" alt="">
                                </figure>
                                <div class="content-box">
                                    <div class="text">
                                        <h4>{{ $item->judul }}</h4>
                                    </div>
                                    <div class="overlay-content">

                                        <p>{{ $item->deskripsi }}</p>
                                        <ul class="link-box clearfix">
                                            <li>
                                                <a href="{{ url('/galeri') }}">
                                                    <i class="flaticon-dog"></i>
                                                    <span>Lihat lebih banyak</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($counter >= 3)
                    @break
                @endif
            @endforeach
        </div>
    </div>
</section>
<section class="service-section" style="background-image: url(assets/images/background/service-bg.jpg);">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInLeft animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h4><a href="{{ url('perangkatdesa') }}">Perangkat Desa</a></h4>
                        <div class="btn-box"><a href="p{{ url('perangkatdesa') }}">More</a></div>
                        <div class="icon-box"><i class="flaticon-police"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 title-column">
                <div class="sec-title centred">
                    <div class="sec-title centred">
                        <h6><i class="flaticon-star"></i><span>SIPAHUTAR</span><i class="flaticon-star"></i></h6>
                        <h2>Semua Informasi Tentang Desa Sipahutar</h2>
                        <div class="title-shape"></div>
                        <a href="departments.html" class="links">Semua Informasi<i
                                class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInRight animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h4><a href="{{ url('pengumumandesa') }}">Pengumuman Desa</a></h4>
                        <div class="btn-box"><a href="{{ url('pengumumandesa') }}">More</a></div>
                        <div class="icon-box"><i class="flaticon-justice"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h4><a href="{{ url('beritadesa') }}">Berita Desa</a></h4>
                        <div class="btn-box"><a href="{{ url('beritadesa') }}">More</a></div>
                        <div class="icon-box"><i class="flaticon-traffic-sign"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h4><a href="{{ url('galeridesa') }}">Galeri Desa</a></h4>
                        <div class="btn-box"><a href="{{ url('galeridesa') }}">More</a></div>
                        <div class="icon-box"><i class="flaticon-statue"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h4><a href="{{ url('hasiltani') }}">Hasil Pertanian Desa</a></h4>
                        <div class="btn-box"><a href="{{ url('hasiltani') }}">More</a></div>
                        <div class="icon-box"><i class="flaticon-chinese-house"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <h4><a href="{{ url('profildesa') }}">Profil Desa</a></h4>
                        <div class="btn-box"><a href="{{ url('profildesa') }}">More</a></div>
                        <div class="icon-box"><i class="flaticon-hospital"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- schedules-section -->
{{-- <section class="schedules-section sec-pad bg-color-1">
    <div class="bg-layer" style="background-image: url(assets/images/background/schedule-bg.jpg);"></div>
    <div class="auto-container">
        <div class="title-inner">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 title-column">
                    <div class="sec-title light">
                        <h6><i class="flaticon-star"></i><span>Sipahutar</span></h6>
                        <h2>Pengumuman & Berita Desa</h2>
                        <div class="title-shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="schedule-tab">
            <div class="tab-btn-box">
                <ul class="tab-btns schedule-tab-btns clearfix">
                    <li class="p-tab-btn active-btn" data-tab="#tab-1">Pengumuman</li>
                    <li class="p-tab-btn" data-tab="#tab-2">Berita Desa</li>
                </ul>
            </div>
            <div class="inner-content" style="width: 1000px;">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 form-column">
                        <div class="subscribe-inner centred">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('assets/images/logosipahutar.jpg') }}"
                                        alt="">
                                </figure>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                        <div class="p-tabs-content">
                            <div class="p-tab active-tab" id="tab-1">
                                <div class="two-column-carousel owl-carousel owl-theme owl-dots-none">

                                    @foreach ($pengumuman as $item)
                                        <div class="schedule-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img
                                                            src="/images/pengumuman/{{ $item->avatar }}"
                                                            alt="">
                                                    </figure>
                                                    <div class="content-box">
                                                        <div class="post-date">

                                                        </div>
                                                        <div class="text">
                                                            <span class="category"><i
                                                                    class="flaticon-star"></i>Pengumuman</span>
                                                            <h4><a href="event-details.html">{{ $item->judul }}</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="links"><a href="event-details.html">Read More<i
                                                                class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="p-tab" id="tab-2">
                                <div class="two-column-carousel owl-carousel owl-theme owl-dots-none">
                                    @foreach ($berita as $item)
                                        <div class="schedule-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img
                                                            src="/images/berita/{{ $item->avatar }}" alt="">
                                                    </figure>
                                                    <div class="content-box">
                                                        <div class="post-date">

                                                        </div>
                                                        <div class="text">
                                                            <span class="category"><i
                                                                    class="flaticon-star"></i>Pengumuman</span>
                                                            <h4><a href="event-details.html">{{ $item->judul }}</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="links"><a href="event-details.html">Read More<i
                                                                class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- schedules-section end -->

<!-- team-section -->
<section class="team-section sec-pad bg-color-1">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
    <div class="auto-container">
        <div class="sec-title">
            <h6><i class="flaticon-star"></i><span>Perangkat Desa</span></h6>
            <h2>Perangkat Desa</h2>
            <div class="title-shape"></div>
            <a href="index-2.html" class="theme-btn">Semua Perangkat</a>
        </div>
        <div class="row clearfix">
            @foreach ($perangkat as $item)
                <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="index-2.html"><img
                                        src="/images/perangkat/{{ $item->avatar }}" alt=""></a></figure>
                            <div class="lower-content">
                                <div class="author-box">
                                    <h4><a href="index-2.html">{{ $item->name }}</a></h4>
                                    <span class="designation">{{ $item->posisition }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</section>
<!-- team-section end -->

<!-- funfact-section -->
<section class="funfact-section">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-7.png);"></div>
    <div class="auto-container">
        <div class="funfact-content">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                    <div class="sec-title">
                        <h6><i class="flaticon-star"></i><span>Interesting Facts</span></h6>
                        <h2>City In Numbers</h2>
                        <div class="title-shape"></div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                    <div class="funfact-inner centred">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                <div class="funfact-block-one">
                                    <div class="inner-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="1500"
                                                data-stop="45">0</span><span>k</span>
                                        </div>
                                        <h6>City Population</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                <div class="funfact-block-one">
                                    <div class="inner-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="1500" data-stop="168">0</span>
                                        </div>
                                        <h6>Total Area in Sq.mi</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                <div class="funfact-block-one">
                                    <div class="inner-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="1500"
                                                data-stop="1.5">0</span><span>M</span>
                                        </div>
                                        <h6>Average Revenue</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                                <div class="funfact-block-one">
                                    <div class="inner-box">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="1500"
                                                data-stop="7">0</span><span>th</span>
                                        </div>
                                        <h6>Largest City in Us</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- funfact-section end -->

@endsection
