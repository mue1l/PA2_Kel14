<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hasiltani;

class HasiltaniController extends Controller
{
    public function index()
    {
        $hasiltanis = Hasiltani::all();
        return view('pages.web.pertanian.hasiltani.index', compact('hasiltanis'));
    }

    public function show(Hasiltani $hasiltani)
    {
        return view('pages.web.pertanian.hasiltani.show', compact('hasiltani'));
    }
}
    