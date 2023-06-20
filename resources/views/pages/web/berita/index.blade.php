@extends('theme.app.main')
@section('title', 'login')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url('{{ asset('assets/images/bg(6).jpg') }}');">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1>Berita Desa</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>sipahutar</li>
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
                        @foreach ($beritas as $berita)
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                        <img src="/images/berita/{{ $berita->avatar }}" width="400" height="100"
                                            class="img-fluid" alt="Image">
                                    </figure>
                                    <div class="post-date">
                                    </div>
                                    <div class="lower-content">
                                        <div class="category"><a href="blog-2.html"><i class="flaticon-star"></i>berita</a>
                                        </div>
                                        <h3><a href="blog-details.html">{{ $berita->judul }}</a></h3>
                                        <ul class="post-info clearfix">
                                            <li><i class="far fa-user"></i><a href="blog-2.html">Admin Desa</a></li>
                                        </ul>
                                        <p
                                            style="overflow: hidden;
                                        text-overflow: ellipsis;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 3;
                                        -webkit-box-orient: vertical;">
                                            {{ $berita->deskripsi }}</p>
                                        <div class="btn-box"><a href="{{ route('berita.show', $berita->id) }}">Baca
                                                selengkapnya</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="pagination-wrapper">
                            <ul class="pagination clearfix">
                                <li>{{ $beritas->links() }}</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">
                        <div class="search-widget">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <input type="text" name="search" placeholder="Enter Keyword ..."
                                        value="{{ request()->search }}">
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
                                    <li><a href="{{ url('pengumumandesa') }}">Pengumuman<span><?php
                                    $countPengumuman = App\Models\Pengumuman::count();
                                    echo '(' . $countPengumuman . ')';
                                    ?></span></a>
                                    </li>
                                    <li><a href="{{ url('beritadesa') }}">Berita<span><?php
                                    $countBerita = App\Models\Berita::count();
                                    echo '(' . $countBerita . ')';
                                    ?></span></a></li>
                                    <li><a href="{{ url('galeridesa') }}">Galeri<span><?php
                                    $countGaleri = App\Models\Galeri::count();
                                    echo '(' . $countGaleri . ')';
                                    ?></span></a></li>
                                    <li><a href="{{ url('hasiltani') }}">Hasil
                                            Pertanian<span><?php
                                            $countHasiltani = App\Models\Hasiltani::count();
                                            echo '(' . $countHasiltani . ')';
                                            ?></span></a>
                                    </li>
                                    <li><a href="{{ url('perangkatdesa') }}">Perangkat
                                            Desa<span><?php
                                            $countPerangkat = App\Models\Perangkat::count();
                                            echo '(' . $countPerangkat . ')';
                                            ?></span></a></li>
                                    <li><a href="{{ url('barang') }}">Peminjaman<span><?php
                                    $countBarang = App\Models\Barang::count();
                                    echo '(' . $countBarang . ')';
                                    ?></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget post-widget">
                            <div class="widget-title">
                                <h3>Berita Populer</h3>
                            </div>
                            <div class="widget-content">
                                @php
                                    $counter = 0;
                                @endphp
                                @foreach ($beritas as $item)
                                    @php
                                        $counter++;
                                    @endphp
                                    <div class="post">
                                        <figure class="post-thumb"><a href="{{ url('beritadesa') }}"><img
                                                    src="/images/berita/{{ $item->avatar }}" alt="avatar"></a>
                                        </figure>
                                        <h6><a href="{{ url('beritadesa') }}">{{ $item->judul }}</a></h6>
                                    </div>
                                    @if ($counter >= 3)
                                    @break
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
