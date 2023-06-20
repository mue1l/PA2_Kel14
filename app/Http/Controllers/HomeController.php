<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Perangkat;
use App\Models\Pengumuman;
use App\Models\Profildesa;
use Illuminate\Http\Request;
use App\Models\Datajeniskelamin;

class HomeController extends Controller
{
    public function index()
    {
        $this->middleware(['auth', 'verified']);

        $profil = Profildesa::all();
        $galeri = Galeri::all();
        $pengumuman = Pengumuman::all();
        $berita = Berita::all();
        $perangkat = Perangkat::all();
        $dataLakiLaki = Datajeniskelamin::where('jenis_kelamin', 'Laki-laki')->first();
        $dataPerempuan = Datajeniskelamin::where('jenis_kelamin', 'Perempuan')->first();
        return view('pages.web.dashboard.mainDashboard', compact('profil', 'galeri', 'pengumuman', 'berita', 'perangkat', 'dataLakiLaki', 'dataPerempuan'));
    }
    public function show()
    {
        return view('pages.admin.dashboard.main');
    }
    public function showpengajar()
    {
        return view('pages.pengajar.dashboard.main');
    }
}
