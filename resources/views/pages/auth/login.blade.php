@extends('theme.auth.main')
@section('title', 'register')
@section('content')
    <section>
        <div style class="preloader">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div id="main-wrapper" class="oxyy-login-register">
            <div class="hero-wrap d-flex align-items-center">
                <div class="hero-mask opacity-4 bg-secondary"></div>
                <div class="hero-bg hero-bg-scroll"
                    style="background-image:url('{{ asset('assets/images/bgsipahutarlogin.jpg') }}');">
                </div>
                <div class="hero-content w-100">
                    <div class="container">
                        <div class="row g-0 min-vh-100">
                            <div class="col-md-6 d-flex flex-column">
                                <div class="row g-0 my-auto">
                                    <div class="col-11 col-sm-10 col-lg-9 mx-auto text-center">
                                        <h1 class="text-5 fw-400 text-white mb-5">Selamat datang di</h1>
                                        <div class="logo mt-5 mb-3">
                                            <img src="{{ asset('assets/images/logosidesi.png') }}" alt="sipahutar"></a>
                                        </div>
                                        <h2 class="text-white line-height-3 mb-5">Website Desa Sipahutar</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-center py-5">
                                <div class="container my-auto py-4 shadow-lg bg-white">
                                    <div class="row">
                                        <div class="col-11 col-lg-10 mx-auto">
                                            <h3 class="text-9 fw-600 text-center my-3"><a href="{{ url('login') }}">Sign In
                                            </h3>
                                            @if (session()->has('loginError'))
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert"
                                                    style="text-align:center; color:rgb(255, 8, 8)">
                                                    {{ session('loginError') }}
                                                </div>
                                            @endif
                                            <p class="text-center mb-4">Belum memiliki akun? <a
                                                    href="{{ route('register-user') }}"><u>Daftar akun anda disini</u></a>
                                            </p>
                                            <form action="{{ route('login.custom') }}" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="form-label text-dark fw-600" for="email">Username or
                                                        Email Address</label>
                                                    <input type="email" name="email" class="form-control rounded-0"
                                                        id="email" placeholder="Enter Your Email">
                                                    @error('email')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label text-dark fw-600"
                                                        for="password">Password</label>
                                                    <input type="password" name="password" class="form-control rounded-0"
                                                        id="password" placeholder="Enter Password">
                                                    @error('password')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input id="remember-me" name="remember"
                                                                class="form-check-input rounded-0" type="checkbox">
                                                            <label class="form-check-label" for="remember-me">Biarkan saya
                                                                tetap masuk</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-grid my-4">
                                                    <button class="btn btn-dark rounded-0" name="submit"
                                                        type="submit">Masuk</button>
                                                </div>
                                            </form>
                                            <p class="text-center">Butuh mencari akun anda? <a
                                                    href="forgot-password-5.html"><u>Username anda</u></a> or <a
                                                    href="https://harnishdesign.net/"><u>Password anda</u></a>?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
