<?php

namespace App\Http\Controllers\Admin;

use App\Models\Datapenduduk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatapendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapenduduk = Datapenduduk::all();
        return view('pages.admin.datapenduduk.main', compact('datapenduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.datapenduduk.create');
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
            'umur' => 'required',
            'Jumlah_penduduk' => 'required'
        ]);

        Datapenduduk::create([
            'umur' => $request->umur,
            'Jumlah_penduduk' => $request->Jumlah_penduduk
        ]);

        return redirect()->route('admin.datapenduduk.index')->with('success', 'Data Penduduk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datapenduduk  $datapenduduk
     * @return \Illuminate\Http\Response
     */
    public function show(Datapenduduk $datapenduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datapenduduk  $datapenduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Datapenduduk $datapenduduk)
    {
        return view('pages.admin.datapenduduk.edit', compact('datapenduduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datapenduduk  $datapenduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datapenduduk $datapenduduk)
    {
        $request->validate([
            'umur' => 'required',
            'Jumlah_penduduk' => 'required',
        ]);

        $datapenduduk->update([
            'umur' => $request->umur,
            'Jumlah_penduduk' => $request->Jumlah_penduduk
        ]);

        return redirect()->route('admin.datapenduduk.index')->with('success', 'Data Penduduk Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datapenduduk  $datapenduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datapenduduk $datapenduduk)
    {
        $datapenduduk->delete();

        return redirect()->route('admin.datapenduduk.index')->with('success', 'Data Penduduk Berhasil Dihapus');
    }
}
