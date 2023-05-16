<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lembaga;


class LembagaController extends Controller
{
    public function index()
    {
        $lembagas = Lembaga::all();
        return view('pages.web.lembaga.index', compact('lembagas'));
    }
}
