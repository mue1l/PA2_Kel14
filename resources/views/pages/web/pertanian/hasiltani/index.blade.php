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
                    <li><a href="#">Beranda</a></li>
                    <li>Layanan Pustaka</li>
                    <li>Pertanian</li>
                    <li>Hasil Pertanian</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->
    <section class="news-section blog-grid sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($hasiltanis as $hasiltani)
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="/images/hasiltani/{{ $hasiltani->avatar }}" width="400" height="100"
                                            class="img-fluid" alt="Image">
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="blog.html"><i class="flaticon-star"></i>Hasil
                                            Pertanian</a>
                                    </div>
                                    <h4><a href="blog-details.html">{{ $hasiltani->nama }}</a></h4>
                                    <ul class="post-info clearfix">
                                        <li><a href="{{ route('hasiltani.show', $hasiltani->id) }}">Selengkapnya..</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination-wrapper centred">
                <ul class="pagination clearfix">
                    <li><a href="blog.html"><i class="far fa-angle-double-left"></i></a></li>
                    <li><a href="blog.html" class="current">1</a></li>
                    <li><a href="blog.html">2</a></li>
                    <li><a href="blog.html"><i class="far fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection
