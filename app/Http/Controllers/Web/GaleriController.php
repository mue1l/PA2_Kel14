<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Galeri;


class GaleriController extends Controller
{
    public function index(Request $request)
    {
        $galeris = Galeri::all();
        $galeris = Galeri::where('judul', 'like', '%' . $request->search . '%')
                                ->orWhere('deskripsi', 'like', '%' . $request->search . '%')
                                ->orderBy('id', 'DESC')
                                ->paginate(3);
        return view('pages.web.galeri.index', compact('galeris'));
    }


    public function show(Galeri $galeri)
    {
        $galeris = Galeri::all();
        return view('pages.web.galeri.show', compact('galeris'));
    }
}
