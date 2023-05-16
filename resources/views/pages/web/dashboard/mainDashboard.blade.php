@extends('theme.app.main')
@section('title', 'login')
@section('content')
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index-2.html"><img src="assets/images/logo-2.png" alt="" title=""></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


    <!-- banner-section -->
    <section class="banner-section style-one">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            <div class="slide-item">
                <div class="image-layer" style="background-image:url('{{ asset('assets/images/bg(2).jpg') }}');"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h6><i class="flaticon-star"></i></h6>
                        <h1></h1>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url('{{ asset('assets/images/bg(1).jpg') }}');"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h6><i class="flaticon-star"></i></h6>
                        <h1></h1>
                        <p></p>

                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url('{{ asset('assets/images/bg(6).jpg') }}');"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h6><i class="flaticon-star"></i></h6>
                        <h1></h1>
                        <p></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->



@endsection
