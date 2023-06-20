<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $pengumumans = Pengumuman::where('judul', 'like', '%' . $request->search . '%')
            ->orWhere('deskripsi', 'like', '%' . $request->search . '%')
            ->orderBy('id', 'DESC')
            ->paginate(3);
        // $pengumumans = Pengumuman::all();
        $berita = Berita::all();
        return view('pages.web.pengumuman.index', compact('pengumumans', 'berita'));
    }


    public function show(Pengumuman $pengumuman)
    {
        $pengumumans = Pengumuman::all();
        $berita = Berita::all();
        return view('pages.web.pengumuman.show', compact('pengumumans', 'berita'));
    }
}
