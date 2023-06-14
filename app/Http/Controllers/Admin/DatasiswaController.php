<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dataanak;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataanak = Dataanak::all();
        return view('pages.pengajar.dataanak.main', compact('dataanak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pengajar.dataanak.create');
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
            'tahun' => 'required',
            'jenis_kelamin' => 'required',
            'jumlah_anak' => 'required'

        ]);

        Dataanak::create([
            'tahun' => $request->tahun,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jumlah_anak' => $request->jumlah_anak

        ]);

        return redirect()->route('pengajar.dataanak.index')->with('success', 'Data Anak Berhasil Ditambahkan');
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
    public function edit(Dataanak $dataanak)
    {
        return view('pages.pengajar.dataanak.edit', compact('dataanak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dataanak $dataanak)
    {
        $request->validate([
            'tahun' => 'required',
            'jenis_kelamin' => 'required',
            'jumlah_anak' => 'required'

        ]);

        $dataanak->update([
            'tahun' => $request->tahun,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jumlah_anak' => $request->jumlah_anak

        ]);

        return redirect()->route('pengajar.dataanak.index')->with('success', 'Data Anak Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dataanak $dataanak)
    {
        $dataanak->delete();

        return redirect()->route('pengajar.dataanak.index')->with('success', 'Data Anak Berhasil Dihapus');
    }
}
