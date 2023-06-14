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
                <a href="{{ url('pengajar/dashboard ') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Data</li>
            <li class="nav-item">
                <a href="{{ url('pengajar/dataanak') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Data Anak</span>
                </a>
            </li>
            <li class="nav-item nav-category">Pendaftaran Siswa</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false"
                    aria-controls="tables">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Pendaftaran</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="tables">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('pengajar.pendaftaran.main') }}" class="nav-link">Tabel pendaftar</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pengajar/pengaturanpendaftaran') }}" class="nav-link">Pengaturan
                                pendaftaran</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item nav-category">Pembayaran Siswa</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false"
                    aria-controls="tables">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Pembayaran </span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="tables">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('pengajar/anakpembayaran') }}" class="nav-link">Tabel
                                pembayaran</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pengajar/pembayaran') }}" class="nav-link">Pengaturan pembayaran</a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</nav>
