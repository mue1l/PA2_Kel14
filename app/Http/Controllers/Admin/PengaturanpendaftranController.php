<?php

namespace App\Http\Controllers\Admin;

use stdClass;
use App\Models\Pengaturanpendaftaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengaturanpendaftranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaturanpendaftaran = Pengaturanpendaftaran::all();
        return view('pages.pengajar.pendaftaran.index', compact('pengaturanpendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaturanpendaftaran $pengaturanpendaftaran)
    {
        return view('pages.pengajar.pendaftaran.edit', compact('pengaturanpendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaturanpendaftaran $pengaturanpendaftaran)
    {
        // dd($request->all());
        $request->validate([
            'status_pendaftaran' => 'required',
            'batas_tutup' => 'required'
        ]);

        // dd($pengaturanpendaftaran);
        $pengaturanpendaftaran->update([
            'status_pendaftaran' => $request->status_pendaftaran,
            'batas_tutup' => $request->batas_tutup
        ]);

        return redirect()->route('pengajar.pengaturanpendaftaran.index')->with('success', 'Pengaturan Pendaftran Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaturanpendaftaran $pengaturanpendaftaran)
    {
        $pengaturanpendaftaran->delete();
        return redirect()->route('pengajar.pendaftaran.index')->with('success', 'Pengaturan Pendaftaran Berhasil Dihapus');
    }

}
