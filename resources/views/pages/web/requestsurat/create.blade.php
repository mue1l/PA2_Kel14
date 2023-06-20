@extends('theme.app.main')
@section('title', 'login')
@section('content')
    <section class="page-title" style="background-image:url('{{ asset('assets/images/bg(1).jpg') }}');">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1>Request Surat</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="#">Beranda</a></li>
                    <li>Request Surat</li>
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
                            <h2>Formulir Request Surat</h2>
                            <div class="title-shape"></div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-12 col-sm-12 small-column">
                                <div class="content_block_10">
                                    <div class="content-box" style="width: 400px;">
                                        <div class="text">
                                            <h3>Request surat</h3>
                                            <p><i></i></p>
                                        </div>
                                        <form action="/request/simpan" method="POST" style="width: 700;">
                                            @csrf
                                            <div class="form-group">
                                                <label for="deskripsi">Surat yang di perlukan : </label>
                                                <select type="date" class="form-control" name="deskripsi" id="deskripsi">
                                                    <option selected disabled>Pilih Surat Keterangan</option>
                                                    <option>SK_Tidak Mampu</option>
                                                    <option>SK_Domisili</option>
                                                    <option>SK_Usaha</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="tujuan">Tujuan</label>
                                                <textarea type="textarea" name="tujuan" id="tujuan" class="form-control" required></textarea>
                                            </div>
                                            <div class="form-group message-btn">
                                                <button type="submit" class="theme-btn">Kirim</button>
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
                            <br><br><br><br><br><br>
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
                                    <li><a href="{{ url('hasiltani') }}">Hasil Pertanian<span><?php
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
    </div>
</section>
@endsection
