<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index(Request $request)
    {
        $barang = Peminjaman::all();
        return view('pages.admin.peminjaman.main', compact('barang'));
    }

    public function terima(Peminjaman $pinjam)
    {
        $pinjam->status = 'terima';
        $pinjam->pemberitahuan = 'Permintaan Peminjaman Anda Diterima , Silahkan kembalikan barang Tepat Waktu Keterlambatan Pengembalian Barang Akan dikenakan Denda';
        $pinjam->update();
        $barang = Barang::where('nama', $pinjam->namaalat)->first();
        $barang->jumlah = $barang->jumlah - $pinjam->jumlah;
        $barang->update();
        return redirect('admin/peminjaman')->with('success', 'Permintaan diterima');
    }

    public function tolak(Peminjaman $pinjam)
    {
        $pinjam->status = 'tolak';
        $pinjam->pemberitahuan = 'Permintaan Peminjaman Anda Ditolak';
        $pinjam->update();
        return redirect('admin/peminjaman')->with('success', 'Permintaan ditolak');
    }

    public function denda(Peminjaman $pinjam)
    {
        $pinjam->status = 'denda';
        $pinjam->pemberitahuan = 'Anda dikenakan denda, silahkan hubungi pengurus tani untuk konfirmasi jumlah denda yang dikenakan';
        $pinjam->update();
        return redirect('admin/peminjaman')->with('success', 'Permintaan dikenakan denda');
    }
}
