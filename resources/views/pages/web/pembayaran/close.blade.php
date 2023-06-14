@extends('theme.app.main')
@section('title', 'login')
@section('content')

    <section class="error-section centred">
        <div class="auto-container">
            <div class="inner-box">
                <figure class="image-box"><img src="{{ asset('assets/images/icons/error.png') }}" alt="">
                </figure>
                <h2>Pembayaran Tidak Tersedia!</h2>
                <a href="{{ url('/') }}" class="theme-btn">Kembali ke Beranda</a>
            </div>
        </div>
    </section>

@endsection
