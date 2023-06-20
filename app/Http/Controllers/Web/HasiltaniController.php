<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use App\Models\Hasiltani;

class HasiltaniController extends Controller
{
    public function index(Request $request)
    {
        $berita = Berita::all();

        $hasiltanis = Hasiltani::all();
        $hasiltanis = Hasiltani::where('nama', 'like', '%' . $request->search . '%')
            ->orWhere('deskripsi', 'like', '%' . $request->search . '%')
            ->orderBy('id', 'DESC')
            ->paginate(3);
        return view('pages.web.pertanian.hasiltani.index', compact('hasiltanis', 'berita'));
    }

    public function show(Hasiltani $hasiltani)

    {
        $berita = Berita::all();
        return view('pages.web.pertanian.hasiltani.show', compact('hasiltani', 'berita'));
    }
}
