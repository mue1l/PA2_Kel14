@extends('theme.app.main')
@section('title', 'login')
@section('content')

    <section class="error-section centred">
        <div class="auto-container">
            <div class="inner-box">
                <figure class="image-box"><img src="{{ asset('assets/web/images/pendaftarantutup.jpeg') }}" alt="">
                </figure>
                <h2>Pendaftaran Belum Dibuka!</h2>
                <p>Tenaga pengajar pada paud sipahutar belum membuka pendaftaran pada PAUD ini.<br />Silahkan menunggu
                    pendaftaran dibuka.</p>
                <a href="index-2.html" class="theme-btn">Kembali ke Beranda</a>
            </div>
        </div>
    </section>

@endsection
