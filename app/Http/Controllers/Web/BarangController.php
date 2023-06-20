<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use Faker\Provider\Base;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        $barang = Barang::where('nama', 'like', '%' . $request->search . '%')
            ->orderBy('id', 'DESC')
            ->paginate(3);
        $barang = Barang::all();
        return view('pages.web.pertanian.alattani.index', compact('barang'));
    }

    public function show($id)
    {
        $barang = Barang::find($id);
        return view('pages.web.pertanian.peminjaman.create', compact('barang'));
    }
}
