<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Hasiltani;

class PertanianController extends Controller
{
    public function index()
    {
        $hasiltanis = Hasiltani::all();
        foreach ($hasiltanis as $hasiltani)

            $barang = Barang::all();
        foreach ($barang as $barang)

            return view('pages.web.pertanian.show', compact('hasiltani', 'barang'));
    }
}
