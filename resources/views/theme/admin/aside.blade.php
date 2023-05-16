<!-- partial:partials/_sidebar.html -->
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            SIDE<span>SI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ url('main') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Profil Desa</li>
            <li class="nav-item">
                <a href="{{ url('#') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Tentang Kami</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('#') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Visi Dan Misi</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('#') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Sejarah Desa</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('#') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Geografis Desa</span>
                </a>
            </li>
            <li class="nav-item nav-category">Pemerintahan</li>
            <li class="nav-item">
                <a href="{{ url('admin/perangkat') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Perangkat Desa</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/lembaga/') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Lembaga Desa</span>
                </a>
            </li>

            <li class="nav-item nav-category">Layanan Pustaka</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false"
                    aria-controls="tables">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Pertanian</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="tables">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('admin/barang/') }}" class="nav-link">Alat Tani</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/hasiltani/') }}" class="nav-link">Hasil Pertanian</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.peminjaman.main') }}" class="nav-link">Peminjaman Alat Tani</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/request') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Request Surat</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('#') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Pendidikan</span>
                </a>
            </li>

            <li class="nav-item nav-category">Informasi Publik</li>
            <li class="nav-item">
                <a href="{{ url('admin/pengumuman/') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Pengumuman</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/galeri/') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Galeri</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/berita/') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Berita Desa</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
