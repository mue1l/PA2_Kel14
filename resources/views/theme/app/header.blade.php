<div class="loader-wrap">
    <div class="preloader">
        <div id="handle-preloader" class="handle-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="P" class="letters-loading">
                        P
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="H" class="letters-loading">
                        H
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- preloader end -->


<!-- search-popup -->
<div id="search-popup" class="search-popup">
    <div class="close-search"><span>Close</span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="https://st.ourhtmldemo.com/new/Whitehall/index.html">
            </form>
            <h3>Profil</h3>
            <form method="POST" action="{{ route('signout') }}" class="booking-form">
                <div class="form-group message-btn">
                    @csrf
                    <button type="submit" class="theme-btn" style="background-color: red;">Keluar</button>
                </div>
            </form>
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
                            <h6>hallooo</h6>
                            {{-- <form class="booking-form">
                                <div class="form-group">
                                    @foreach ($pinjam as $item)
                                        <textarea name="message" placeholder="{{ $item->pemberitahuan }}"></textarea>
                                    @endforeach
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END sidebar widget item -->


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
                                <li><a href="{{ url('mainDashboard') }}">Beranda</a>
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
                                <li class="dropdown"><a href="#">Layanan Pustaka</a>
                                    <ul>
                                        <li><a href="{{ url('requestsurat') }}">Request Surat</a></li>
                                        <li><a href="event-2.html">Pendidikan</a></li>
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
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
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
