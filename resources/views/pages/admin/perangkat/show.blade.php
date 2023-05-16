<div class="app-content main-content mt-4">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Perangkat Desa</h4>
                    </div>
                </div>
                <form id="form_input">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Perangkat</label>
                                <input type="text" name="title" class="form-control"
                                    placeholder="Masukkan Nama Product" value="{{ $data->title }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" placeholder="Masukkan Jabatan"
                                    value="{{ $data->jabatan }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <input type="text" name="address" class="form-control" placeholder="Masukkan Alamat"
                                    value="{{ $data->address }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Gambar</label>
                                <input type="file" name="cover" class="form-control" placeholder="Masukkan Gambar"
                                    value="{{ $data->cover }}">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <a class="btn btn-light" href="javascript:;" onclick="load_list(1);">Kembali</a>
                                @if ($data->id)
                                    <button id="tombol_simpan"
                                        onclick="handle_upload('#tombol_simpan','#form_input','{{ route('admin.menu.update', $data->id) }}','PATCH');"
                                        class="btn btn-primary" id="add-btn">Edit Produk</button>
                                @else
                                    <button id="tombol_simpan"
                                        onclick="handle_upload('#tombol_simpan','#form_input','{{ route('admin.menu.store') }}','POST');"
                                        class="btn btn-primary" id="add-btn">Tambah Produk</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
