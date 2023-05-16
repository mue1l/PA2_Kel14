@extends('theme.auth.main')
@section('title', 'register')
@section('content')

    <body>
        <!-- Preloader -->
        <div class="preloader">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloader End -->

        <div id="main-wrapper" class="oxyy-login-register">
            <div class="hero-wrap d-flex align-items-center">
                <div class="hero-mask opacity-4 bg-secondary"></div>
                <div class="hero-bg hero-bg-scroll"
                    style="background-image:url('{{ asset('assets/images/bgsipahutarlogin.jpg') }}');"></div>
                <div class="hero-content w-100">
                    <div class="container">
                        <div class="row g-0 min-vh-100">
                            <!-- Welcome Text
                                          ========================= -->
                            <div class="col-md-6 d-flex flex-column">
                                <div class="row g-0 my-auto">
                                    <div class="col-11 col-sm-10 col-lg-9 mx-auto text-center">
                                        <h1 class="text-5 fw-400 text-white mb-5">Selamat datang di</h1>
                                        <div class="logo mt-5 mb-3"><img src="{{ asset('assets/images/logosidesi.png') }}"
                                                alt="sipahutar"></a>
                                        </div>
                                        <h2 class="text-white line-height-3 mb-5">Website Desa Sipahutar</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-center py-5">
                                <div class="container my-auto py-4 shadow-lg bg-white">
                                    <div class="row">
                                        <div class="col-11 col-lg-10 mx-auto">
                                            <h3 class="text-9 fw-600 text-center my-3">Daftar akun anda</h3>
                                            <p class="text-center mb-4">Sudah memiliki akun? <a
                                                    href="{{ route('login') }}"><u>Login</u></a></p>

                                            <form action="{{ route('register.custom') }}" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="form-label text-dark fw-600">Nama Lengkap</label>
                                                    <input type="text" name="name" class="form-control rounded-0"
                                                        id="namalengkap" required placeholder="Masukkan nama lengkap anda">
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label text-dark fw-600">Alamat</label>
                                                    <input type="textarea" name="alamat" class="form-control rounded-0"
                                                        id="alamat" required placeholder="Masukkan alamat anda">
                                                    @error('alamat')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label text-dark fw-600">Username</label>
                                                    <input type="text" name="username" class="form-control rounded-0"
                                                        id="username" required placeholder="Masukkan nama pengguna anda">
                                                    @error('username')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label text-dark fw-600">Nomor Hp</label>
                                                    <input type="text" name="nomorhp" class="form-control rounded-0"
                                                        id="nohp" required placeholder="Masukkan nomor hp anda anda">
                                                    @error('nomorhp')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label text-dark fw-600">Email</label>
                                                    <input type="email" name="email" class="form-control rounded-0"
                                                        id="email" required placeholder="Masukkan email anda">
                                                    @error('email')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label text-dark fw-600">Password</label>
                                                    <input type="password" name="password" class="form-control rounded-0"
                                                        id="password" required placeholder="Masukkan Password anda">
                                                    @error('password')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="d-grid my-4">
                                                    <button class="btn btn-dark rounded-0" type="submit"
                                                        name="daftar">Daftar Akun</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Register Form End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Styles Switcher -->
        <div id="styles-switcher" class="left">
        </div>
        <!-- Styles Switcher End -->
