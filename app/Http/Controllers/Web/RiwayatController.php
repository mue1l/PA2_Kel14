<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use App\Models\Peminjaman;


class RiwayatController extends Controller
{
    public function index(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('loginError', 'Silahkan login terlebih dahulu sebelum melakukan peminjaman!');;
        }

        $barang = Peminjaman::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();
        return view('pages.web.pertanian.alattani.show', compact('barang'));
    }
}
