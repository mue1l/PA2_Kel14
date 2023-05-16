@extends('theme.app.main')
@section('title', 'login')
@section('content')
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

    <br>

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
                                        <p>
                                            {{ $pengumuman->deskripsi }}</p>
                                        <div class="btn-box"><a href="{{ route('pengumuman.index') }}">Kembali</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="comment-box">
                            <div class="text">
                                <h3>Komentar</h3>
                                <br>
                            </div>
                            <div class="comment">
                                {{-- <figure class="thumb-box">
                                    <img src="assets/images/news/comment-1.jpg" alt="">
                                </figure>
                                <div class="comment-inner">
                                    <div class="comment-info clearfix">
                                        <h4>Isaac Herman</h4>
                                        <span class="post-date">May 14, 2020 [11.00am]</span>
                                    </div>
                                    <p>How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                                    <a href="blog-details.html" class="reply-btn"><i class="far fa-share"></i>Reply</a>
                                </div> --}}
                            </div>
                            <div class="comment reply-comment">
                                {{-- <figure class="thumb-box">
                                    <img src="assets/images/news/comment-2.jpg" alt="">
                                </figure>
                                <div class="comment-inner">
                                    <div class="comment-info clearfix">
                                        <h4>William Cobus</h4>
                                        <span class="post-date">May 14, 2020 [11.00am]</span>
                                    </div>
                                    <p>Undertakes laborious physical exercise, except to obtain some advantage from it but who has any right to find fault.</p>
                                    <a href="blog-details.html" class="reply-btn"><i class="far fa-share"></i>Reply</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="comments-form-area">
                            <div class="text">
                                <p>Buat komentar anda disini</p>
                            </div>
                            <form method="post" action="https://st.ourhtmldemo.com/new/Whitehall/blog-details.html"
                                class="default-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Masukkan Nama anda"
                                                required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Masukkan Email anda"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Masukkan komentar anda ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 big-column">
                                        <div class="message-btn">
                                            <button type="submit" class="theme-btn">Buat komentar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
