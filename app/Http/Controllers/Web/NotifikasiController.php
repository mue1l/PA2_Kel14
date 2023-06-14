<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use App\Models\Peminjaman;


class NotifikasiController extends Controller
{
    public function index(Peminjaman $pinjam)
    {
        $pinjam->pemberitahuan;
        return view('theme.app.header', compact('notifikasi'));
    }
}
