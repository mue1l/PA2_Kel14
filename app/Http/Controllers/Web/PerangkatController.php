<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perangkat;

class PerangkatController extends Controller
{
    public function index()
    {
        $perangkats = Perangkat::all();
        return view('pages.web.perangkat.index', compact('perangkats'));
    }
}
