<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('pages.web.pertanian.alattani.index', compact('barang'));
    }

    public function show($id)
    {
        $barang = Barang::find($id);
        return view('pages.web.pertanian.peminjaman.create', compact('barang'));
    }
}
