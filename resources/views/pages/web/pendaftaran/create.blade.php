@extends('theme.app.main')
@section('title', 'login')
@section('content')

    <section class="page-title" style="background-image:url('{{ asset('assets/images/bg(1).jpg') }}');">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1>Pendaftaran</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="#">Beranda</a></li>
                    <li>Pendaftaran</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sidebar-page-container sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="auto-container">
                        <div class="sec-title">
                            <h6><i class="flaticon-star"></i><span>Desa Sipahutar</span></h6>
                            <h2>Formulir Pendaftaran Anak Paud</h2>
                            <div class="title-shape"></div>
                            <br>
                            <a href="{{ url('bayar') }}" class="theme-btn">Pembayaran</a>
                        </div>
                        {{-- @foreach ($pendaftaran as $item)
                            <div class="text">
                                <h5 style="color: rgb(8, 8, 235)
                                ">
                                    {{ $item->pemberitahuan }}</h5>
                            </div>
                        @endforeach --}}

                        <br>
                        <h4>Silahkan melakukan pendaftaran pada formulir dibawah ini</h4>
                        <br>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-12 col-sm-12 small-column">
                                <div class="content_block_10">
                                    <div class="content-box" style="width: 400px;">
                                        <div class="text">
                                            <h3>Pendaftaran</h3>
                                            @if (session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                            @if (session()->has('error'))
                                                <div style="color:red;" class="alert alert-success">
                                                    {{ session()->get('error') }}
                                                </div>
                                            @endif
                                            <p><i></i></p>
                                        </div>
                                        <form action="{{ route('pendaftaran.store') }}" method="POST"
                                            enctype="multipart/form-data" style="width: 700;">
                                            @csrf
                                            <div class="form-group">
                                                <label for="nama_anak">Nama Anak : </label>
                                                <input type="text" class="form-control" name="nama_anak" id="nama_anak"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tanggal_lahir">Tanggal Lahir : </label>
                                                <input type="date" class="form-control" name="tanggal_lahir"
                                                    id="tanggal_lahir" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="umur">Umur Anak : </label>
                                                <input type="number" class="form-control" name="umur" id="umur"
                                                    required>
                                            </div>
                                            @error('umur')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="form-group">
                                                <label for="jenis_kelamin">Jenis Kelamin : </label>
                                                <select type="date" class="form-control" name="jenis_kelamin"
                                                    id="jenis_kelamin">
                                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                                    <option>Laki-Laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_orangtua">Nama Orang Tua : </label>
                                                <input type="text" class="form-control" name="nama_orangtua"
                                                    id="nama_orangtua" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat : </label>
                                                <input type="text" class="form-control" name="alamat" id="alamat"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label for="avatar">Upload Photo KK </label>
                                                <input type="file" name="avatar" id="avatar"
                                                    class="form-control @error('avatar') is-invalid @enderror"
                                                    value="{{ old('avatar') }}">
                                            </div>
                                            @error('avatar')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                            <br>
                                            <div class="form-group message-btn">
                                                <button type="submit" class="theme-btn">Daftar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">
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
                        {{-- <div class="sidebar-widget post-widget">
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
                                    <h6><a href="blog-details.html">Moves to Third Step Towards COVID Normal</a>
                                    </h6>
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
