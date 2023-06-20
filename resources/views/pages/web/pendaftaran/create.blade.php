@extends('theme.app.main')
@section('title', 'login')
@section('content')

    <section class="page-title" style="background-image:url('{{ asset('assets/file/PAUD DESA/paudbg.jpg') }}');">
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

                        <br>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-12 col-sm-12 small-column">
                                <div class="content_block_10" style="width:800px;">
                                    <div class="content-box" style="width: 600px;">
                                        <div class="text">
                                            <h3>Pendaftaran</h3>
                                            <p><i>Silahkan melakukan pendaftaran pada formulir dibawah ini</i></p>
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
                            <br><br><br><br><br><br><br><br><br><br><br>
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
                                @foreach ($berita as $item)
                                    @php
                                        $counter++;
                                    @endphp
                                    <div class="post">
                                        <figure class="post-thumb"><a href="{{ url('beritadesa') }}"><img
                                                    src="/images/berita/{{ $item->avatar }}" alt="avatar"></a></figure>
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
</section>


@endsection
