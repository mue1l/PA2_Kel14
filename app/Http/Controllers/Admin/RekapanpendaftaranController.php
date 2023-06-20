<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rekapan;
use App\Http\Controllers\Controller;
use App\Models\pembayarandaftar;
use Illuminate\Http\Request;

class RekapanpendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $pembayarandaftar = pembayarandaftar::all();
        // dd($request->all());
        $request->validate([
            'uang_diterima' => 'required',
            'uang_kurang' => 'required',
            'uang_lebih' => 'required'
        ]);

        $rekapan = Rekapan::create([
            'nama_anak' => $request->input('nama_anak'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'umur' => $request->input('umur'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'nama_orangtua' => $request->input('nama_orangtua'),
            'alamat' => $request->input('alamat'),
            'uang_diterima' => $request->input('uang_diterima'),
            'uang_kurang' => $request->input('uang_kurang'),
            'uang_lebih' => $request->input('uang_lebih'),
            'user_id' => $request->user()->id,
        ]);
        // dd($pembayarandaftar);
        // Redirect to the index page or show a success message
        return view('pages.admin.rekapanpendaftaran.main')->with('success', 'Rekapan pendaftarn berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rekapan  $rekapan
     * @return \Illuminate\Http\Response
     */
    public function show(Rekapan $rekapan)
    {
        return view('pages.admin.rekapanpendaftaran.create', compact('rekapan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rekapan  $rekapan
     * @return \Illuminate\Http\Response
     */
    public function edit(Rekapan $rekapan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rekapan  $rekapan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rekapan $rekapan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rekapan  $rekapan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rekapan $rekapan)
    {
        //
    }
}
