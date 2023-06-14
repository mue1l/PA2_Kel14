<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\pembayarandaftar;
use App\Models\pengaturanpendaftaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('pages.pengajar.pembayaran.main', compact('pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pengajar.pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_bank' => 'required',
            'no_rekening' => 'required',
            'batas_pembayaran' => 'required',
        ]);

        Pembayaran::create([
            'nama_bank' => $request->nama_bank,
            'no_rekening' => $request->no_rekening,
            'batas_pembayaran' => $request->batas_pembayaran
        ]);

        return redirect()->route('pengajar.pembayaran.index')->with('success', 'Metode pembayaran Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(pembayarandaftar $pembayarandaftar)
    {
        $pembayarandaftar = pembayarandaftar::all();
        return view('pages.pengajar.pendaftaran.index', compact('pembayarandaftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        return view('pages.pengajar.pembayaran.edit', compact('pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        $request->validate([
            'nama_bank' => 'required',
            'no_rekening' => 'required',
            'batas_pembayaran' => 'required',
        ]);
        $pembayaran->update([
            'nama_bank' => $request->nama_bank,
            'no_rekening' => $request->no_rekening,
            'batas_pembayaran' => $request->batas_pembayaran
        ]);

        return redirect()->route('pengajar.pembayaran.index')->with('success', 'Metode Pembayaran Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembayaran $pembayaran)
    {

        $pembayaran->delete();

        return redirect()->route('pengajar.pembayaran.index')->with('success', 'Metode Pembayaran Berhasil Dihapus');
    }
}
