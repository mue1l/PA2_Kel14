<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Galeri;


class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();
        return view('pages.web.galeri.index', compact('galeris'));
    }


    public function show(Galeri $galeri)
    {
        $galeris = Galeri::all();
        return view('pages.web.galeri.show', compact('galeris'));
    }
}
