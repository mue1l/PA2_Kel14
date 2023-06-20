{{-- @extends('theme.pengajar.main')
@section('title', 'rekapanpendaftran')
@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card" style="width: 600px;
                height: 700px;">
                    <div class="card-body">
                        <div class="text">
                            <h3><strong>Pembayaran</strong></h3>
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <p><i></i></p>
                        </div>
                        <br>
                        <form class="forms-sample" action="{{ route('pembayarandaftar.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Nama
                                    anak</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                                    name="nama_anak" placeholder="{{ $pembayarandaftar->nama_anak }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal lahir</label>
                                <input type="date" placeholder="{{ $pembayarandaftar->tanggal_lahir }}" class="form-control" id="exampleInputEmail1" name="tanggal_lahir">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Umur Anak</label>
                                <input type="number" placeholder="{{ $pembayarandaftar->umur }}" class="form-control" id="exampleInputEmail1" name="umur">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control" placeholder="{{ $pembayarandaftar->jenis_kelamin }}" id="exampleInputEmail1" name="jenis_kelamin">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Nama
                                    Orang Tua</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                                    name="nama_orangtua" placeholder="{{ $pembayarandaftar->jenis_kelamin }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Alamat</label>
                                <input type="textarea" class="form-control" id="exampleInputUsername1" autocomplete="off"
                                    name="alamat" >
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Kirim</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
