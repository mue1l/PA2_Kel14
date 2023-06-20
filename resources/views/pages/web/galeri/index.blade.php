@extends('theme.app.main')
@section('title', 'login')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url('{{ asset('assets/images/bg(6).jpg') }}');">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1>Galeri Desa</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Galeri</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->
    <!-- news-section -->
    <section class="news-section blog-grid sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($galeris as $galeri)
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="/images/galeri/{{ $galeri->avatar }}" width="400" height="100"
                                            class="img-fluid" alt="Image">
                                    </figure>
                                    <div class="post-date">
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="blog.html"><i class="flaticon-star"></i>Galeri</a>
                                    </div>
                                    <h4><a href="blog-details.html">{{ $galeri->judul }}</a></h4>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">Admin Desa</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pagination-wrapper">
                    <ul class="pagination clearfix">
                        <li>{{ $galeris->links() }}</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- news-section end -->
@endsection
