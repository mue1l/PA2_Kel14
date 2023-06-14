@extends('theme.app.main')
@section('title', 'login')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/kantorsipahutar.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1>Lembaga Desa Sipahutar</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="#">Beranda</a></li>
                    <li>Lembaga Sipahutar</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <section class="team-section sec-pad bg-color-1">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
        <div class="auto-container">
            <div class="sec-title">
                <h6><i class="flaticon-star"></i><span>Desa Sipahutar</span></h6>
                <h2>Lembaga Desa Sipahutar</h2>
                <div class="title-shape"></div>

            </div>
            <div class="row clearfix">
                @foreach ($lembagas as $lembaga)
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="/images/lembaga/{{ $lembaga->avatar }}" width="400"
                                        height="100" class="img-fluid" alt="Image"></figure>
                                <div class="lower-content">
                                    <div class="author-box">
                                        <h4 style="font-family: Montserrat"><a href="index-2.html">{{ $lembaga->name }}</a>
                                        </h4>
                                        <span class="designation"
                                            style="font-family: Montserrat">{{ $lembaga->position }}</span>
                                    </div>
                                    <ul class="othre-info clearfix">
                                        <p style="text-align: center"> Alamat : {{ $lembaga->address }}</p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
