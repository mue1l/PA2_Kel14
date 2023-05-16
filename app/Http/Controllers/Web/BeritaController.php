<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('pages.web.berita.index', compact('beritas'));
    }


    public function show(Berita $berita)
    {
        $beritas = Berita::all();
        return view('pages.web.berita.show', compact('beritas'));
    }
}
