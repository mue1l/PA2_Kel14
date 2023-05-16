@extends('theme.app.main')
@section('title', 'login')
@section('content')
            <!-- Page Title -->
            <section class="page-title" style="background-image:url('{{ asset('assets/images/bg(6).jpg') }}');">
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

    <section class="sidebar-page-container sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-classic-content">
                        @foreach ($pengumumans as $pengumuman)
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="/images/pengumuman/{{ $pengumuman->avatar }}" width="400"
                                            height="100" class="img-fluid" alt="Image">
                                    </figure>
                                    <div class="post-date">
                                        <h3>28<span>Jan’21</span></h3>
                                    </div>
                                    <div class="lower-content">
                                        <div class="category"><a href="blog-2.html"><i
                                                    class="flaticon-star"></i>Pengumuman</a></div>
                                        <h3><a href="blog-details.html">{{ $pengumuman->judul }}</a></h3>
                                        <ul class="post-info clearfix">
                                            <li><i class="far fa-user"></i><a
                                                    href="blog-2.html">{{ $pengumuman->created_by }}</a></li>
                                            <li><i class="far fa-comment"></i><a href="blog-2.html">2 Comments</a></li>
                                        </ul>
                                        <p
                                            style="overflow: hidden;
                                        text-overflow: ellipsis;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 2;
                                        -webkit-box-orient: vertical;">
                                            {{ $pengumuman->deskripsi }}</p>
                                        <div class="btn-box"><a href="{{ route('pengumuman.show', $pengumuman->id) }}">Read
                                                More</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="pagination-wrapper">
                            <ul class="pagination clearfix">
                                <li><a href="blog-2.html"><i class="far fa-angle-double-left"></i></a></li>
                                <li><a href="blog-2.html" class="current">1</a></li>
                                <li><a href="blog-2.html">2</a></li>
                                <li><a href="blog-2.html"><i class="far fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">
                        <div class="search-widget">
                            <form action="https://st.ourhtmldemo.com/new/Whitehall/blog-2.html" method="post"
                                class="search-form">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Enter Keyword ..."
                                        required="">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="blog-details.html">Announcement<span>(10)</span></a></li>
                                    <li><a href="blog-details.html">Education<span>(06)</span></a></li>
                                    <li><a href="blog-details.html">Opportunities<span>(12)</span></a></li>
                                    <li><a href="blog-details.html">Public Information<span>(14)</span></a></li>
                                    <li><a href="blog-details.html">Regeneration<span>(05)</span></a></li>
                                    <li><a href="blog-details.html">Tourist Guide<span>(09)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget post-widget">
                            <div class="widget-title">
                                <h3>Popular Post</h3>
                            </div>
                            <div class="widget-content">
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img
                                                src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                    <h6><a href="blog-details.html">Make Your Festive Season Zero-Waste</a></h6>
                                    <p><i class="far fa-calendar"></i>Jan 10, 2021</p>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img
                                                src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                    <h6><a href="blog-details.html">City Council Commits to Green New Deal</a></h6>
                                    <p><i class="far fa-calendar"></i>Dec 26, 2020</p>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img
                                                src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                    <h6><a href="blog-details.html">Moves to Third Step Towards COVID Normal</a></h6>
                                    <p><i class="far fa-calendar"></i>Dec 05, 2020</p>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget archives-widget">
                            <div class="widget-title">
                                <h3>Archives</h3>
                            </div>
                            <div class="widget-content">
                                <div class="select-box">
                                    <div class="icon-box"><i class="far fa-calendar"></i></div>
                                    <select class="wide">
                                        <option data-display="November 2020">November 2020</option>
                                        <option value="1">Nov 2019</option>
                                        <option value="2">Oct 2019</option>
                                        <option value="3">Sep 2019</option>
                                        <option value="4">Aug 2019</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
