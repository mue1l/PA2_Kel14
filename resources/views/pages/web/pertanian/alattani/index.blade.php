@extends('theme.app.main')
@section('title', 'login')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url('{{ asset('assets/images/bg(4).jpg') }}');">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1>Peminjaman Pertanian</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="#">Beranda</a></li>
                    <li>Layanan Pustaka</li>
                    <li>Pertanian</li>
                    <li>Peminjaman Alat</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- End Page Title -->
    <section class="news-section blog-grid sec-pad-2">
        <div class="auto-container">
            <div class="sec-title">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <h6><i class="flaticon-star"></i><span>Desa Sipahutar</span></h6>
                <h2>Peminjaman alat pertanian</h2>
                <div class="title-shape"></div>
                <br>
                <a href="{{ url('riwayatpeminjaman') }}" class="theme-btn">Riwayat Peminjaman</a>
            </div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($barang as $barang)
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="/images/barang/{{ $barang->avatar }}" width="400" height="100"
                                            class="img-fluid" alt="Image">
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="blog.html"><i class="flaticon-star"></i>Alat tani</a>
                                    </div>
                                    <h4><a href="blog-details.html">{{ $barang->nama }}</a></h4>
                                    <ul class="post-info clearfix">
                                        <li><a href="blog-details.html">Stok : {{ $barang->jumlah }}</a></li>
                                        <div class="category"><a href="show_barang/{{ $barang->id }}"><i
                                                    class="flaticon-star"></i>Pinjam</a>
                                        </div>
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
