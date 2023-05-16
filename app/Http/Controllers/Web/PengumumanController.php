<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumumans = Pengumuman::all();
        return view('pages.web.pengumuman.index', compact('pengumumans'));
    }


    public function show(Pengumuman $pengumuman)
    {
        $pengumumans = Pengumuman::all();
        return view('pages.web.pengumuman.show', compact('pengumumans'));
    }
}
