<!-- search-popup -->
<div id="search-popup" class="search-popup">
    <div class="close-search"><span>Close</span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="https://st.ourhtmldemo.com/new/Whitehall/index.html">
            </form>
            <h2 style="color: White"><b>Profil anda</b></h2>
            <br>
            @auth
                <h4 style="color: white">Nama : {{ auth()->user()->name }}</h4>
                <h4 style="color: white">Alamat : {{ auth()->user()->alamat }}</h4>
                <h4 style="color: white">Nomor HP : {{ auth()->user()->nomorhp }}</h4>
                <h4 style="color: white">Email : {{ auth()->user()->email }}</h4>
            @endauth
            <br>
            @auth
                <form method="POST" action="{{ route('signout') }}" class="booking-form">
                    <div class="form-group message-btn">
                        @csrf
                        <button type="submit" class="theme-btn" style="background-color: red;">Keluar</button>
                    </div>
                </form>
            @else
                <a href="{{ route('login') }}" class="theme-btn" style="background-color: green;">Login</a>
            @endauth
        </div>
    </div>
</div>
<!-- search-popup end -->


<!-- sidebar cart item -->
<div class="xs-sidebar-group info-group info-sidebar">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget"><i class="fal fa-times"></i></a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="content-box">
                            <h4>Notifikasi</h4>
                            <form class="booking-form">
                                <div class="form-group">
                                    @auth
                                        @foreach ($all_notif as $item)
                                            <div class="border border-success px-3 py-4">
                                                <h6 class="text-light">
                                                    {{ $item->pemberitahuan }}
                                                </h6>
                                            </div>
                                        @endforeach
                                    @endauth
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @auth
        @if (count($all_notif) > 0)
            <span class="notification-badge"></span>
        @endif
    @endauth
</div>


<!-- main header -->
<header class="main-header style-one">
    <!-- header-top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner clearfix">
                <div class="left-column pull-left clearfix">
                    <div class="weathre-box"><i class="flaticon-sunny-day-or-sun-weather"></i></div>
                    <ul class="links-box clearfix">
                        <li><a href="#">Desa Sipahutar</a></li>
                    </ul>
                </div>
                <div class="right-column pull-right clearfix">
                </div>
            </div>
        </div>
    </div>

    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="index-2.html"><img
                                src="{{ asset('assets/web/images/logosipahutar.jpg') }}" alt=""
                                style=" width: 70;
                                height: 70px;"></a>
                    </figure>
                </div>
                <div class="menu-area clearfix pull-right">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{ url('/') }}">Beranda</a>
                                </li>
                                <li><a href="{{ url('profildesa') }}">Profil
                                        Desa</a>
                                </li>
                                <li class="dropdown"><a href="#">Pemerintahan</a>
                                    <ul class="category-list clearfix">
                                        <li><a href="{{ url('perangkatdesa') }}">Perangkat
                                                Desa</a></li>

                                        <li><a href="{{ url('lembagadesa') }}">Lembaga
                                                Desa</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Layanan Desa</a>
                                    <ul>
                                        <li><a href="{{ url('requestsurat') }}">Request Surat</a></li>
                                        <li class="dropdown"><a href="#">Pendidikan</a>
                                            <ul>
                                                <li><a href="{{ route('pendaftaran.create') }}">Pendaftaran Sekolah
                                                        Paud</a>
                                                </li>
                                                <li><a href="{{ url('bayar') }}">Pembayaran</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Pertanian</a>
                                            <ul>
                                                <li><a href="{{ url('hasiltani') }}">Hasil Pertanian</a></li>
                                                <li><a href="{{ url('barang') }}">Pinjam alat pertanian</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Informasi Publik</a>
                                    <ul>
                                        <li><a href="{{ url('pengumumandesa') }}">Pengumuman</a></li>
                                        <li><a href="{{ url('beritadesa') }}">Berita Desa</a></li>
                                        <li><a href="{{ url('galeridesa') }}">Galeri</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="menu-right-content clearfix">
                        <div class="language-box">

                        </div>
                        <ul class="other-option clearfix">
                            <li class="nav-box">
                                <div class="nav-toggler navSidebar-button">

                                    <div class="circle">
                                        @auth
                                            {{ $totalNewNotifications }}

                                        @endauth
                                        <i data-feather="bell"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="search-btn">
                                <button type="button" class="search-toggler"><i data-feather="user"></i></button>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="index-2.html"><img
                                src="{{ asset('assets/web/images/logosipahutar.jpg') }}" alt=""
                                style=" width: 70;
                        height: 70px;"></a></figure>
                </div>
                <div class="menu-area clearfix pull-right">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{ url('/') }}">Beranda</a>
                                </li>
                                <li><a href="{{ url('profildesa') }}">Profil
                                        Desa</a>
                                </li>
                                <li class="dropdown"><a href="#">Pemerintahan</a>
                                    <ul class="category-list clearfix">
                                        <li><a href="{{ url('perangkatdesa') }}">Perangkat
                                                Desa</a></li>

                                        <li><a href="{{ url('lembagadesa') }}">Lembaga
                                                Desa</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Layanan Desa</a>
                                    <ul>
                                        <li><a href="{{ url('requestsurat') }}">Request Surat</a></li>
                                        <li class="dropdown"><a href="#">Pendidikan</a>
                                            <ul>
                                                <li><a href="{{ route('pendaftaran.create') }}">Pendaftaran Sekolah
                                                        Paud</a>
                                                </li>
                                                <li><a href="{{ url('bayar') }}">Pembayaran</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Pertanian</a>
                                            <ul>
                                                <li><a href="{{ url('hasiltani') }}">Hasil Pertanian</a></li>
                                                <li><a href="{{ url('barang') }}">Pinjam alat pertanian</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Informasi Publik</a>
                                    <ul>
                                        <li><a href="{{ url('pengumumandesa') }}">Pengumuman</a></li>
                                        <li><a href="{{ url('beritadesa') }}">Berita Desa</a></li>
                                        <li><a href="{{ url('galeridesa') }}">Galeri</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="menu-right-content clearfix">
                        <div class="language-box">

                        </div>
                        <ul class="other-option clearfix">
                            <li class="nav-box">
                                <div class="nav-toggler navSidebar-button"><i data-feather="bell"></i></div>
                            </li>
                            <li class="search-btn">
                                <button type="button" class="search-toggler"><i data-feather="user"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->
