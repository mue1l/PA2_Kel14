<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use App\Models\Peminjaman;


class PeminjamanController extends Controller
{
    // public function createPeminjaman()
    // {
    //     return view('pages.web.pertanian.peminjaman.create');
    // }

    public function storePeminjaman(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('loginError', 'Silahkan login terlebih dahulu sebelum melakukan peminjaman!');;
        }
        $barang = Barang::where('nama', $request->namaalat)->first();
        
        // dd($request->all());
        $request->validate([
            'namaalat' => 'required',
            'jumlah' => 'required',
            'tanggal_peminjaman' => 'required|date|after_or_equal:today',
            'tanggal_pemulangan' => 'required|date|after_or_equal:today'
        ]);
        if ($request->jumlah <= 0) {
            return back()->with('error', 'Jumlah alat yang dipinjam harus lebih dari 0');
        } elseif ($request->jumlah > $barang->jumlah) {
            return back()->with('error', 'Stok yang tersedia kurang');
        } else {
            $peminjaman_alat = new Peminjaman();
            $peminjaman_alat->user_id = Auth::user()->id;
            $peminjaman_alat->namaalat = $request->namaalat;
            $peminjaman_alat->jumlah = $request->jumlah;
            $peminjaman_alat->tanggal_peminjaman = $request->tanggal_peminjaman;
            $peminjaman_alat->tanggal_pemulangan = $request->tanggal_pemulangan;
            $peminjaman_alat->pemberitahuan = $request->pemberitahuan;
            $peminjaman_alat->status = 'menunggu';
            $peminjaman_alat->save();

            return redirect()->route('alattani.index')->with('success', 'Data peminjaman anda berhasil dikirim!');
        }
    }
}
