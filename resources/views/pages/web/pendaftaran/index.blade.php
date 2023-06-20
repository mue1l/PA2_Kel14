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
                            <br>
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <div class="btn-box"><a href="{{ route('pendaftaran.create') }}">Kembali</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
