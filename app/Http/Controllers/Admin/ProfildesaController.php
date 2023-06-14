<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profildesa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfildesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profildesa = Profildesa::all();
        return view('pages.admin.profildesa.main', compact('profildesa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.profildesa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'tentang' => 'required',
            'sejarah' => 'required',
            'visi' => 'required',
            'misi' => 'required'
        ]);

        Profildesa::create([
            'tentang' => $request->tentang,
            'sejarah' => $request->sejarah,
            'visi' => $request->visi,
            'misi' => $request->misi,

        ]);

        return redirect()->route('admin.profildesa.index')->with('success', 'Profil Desa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profildesa  $profildesa
     * @return \Illuminate\Http\Response
     */
    public function show(Profildesa $profildesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profildesa  $profildesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Profildesa $profildesa)
    {
        return view('pages.admin.profildesa.edit', compact('profildesa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profildesa  $profildesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profildesa $profildesa)
    {
        $request->validate([
            'tentang' => 'required',
            'sejarah' => 'required',
            'visi' => 'required',
            'misi' => 'required'
        ]);

        $profildesa->update([
            'tentang' => $request->tentang,
            'sejarah' => $request->sejarah,
            'visi' => $request->visi,
            'misi' => $request->misi
        ]);

        return redirect()->route('admin.profildesa.index')->with('success', 'Profil Desa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profildesa  $profildesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profildesa $profildesa)
    {
        $profildesa->delete();

        return redirect()->route('admin.profildesa.index')->with('success', 'Profil Desa Berhasil Dihapus');
    }
}
