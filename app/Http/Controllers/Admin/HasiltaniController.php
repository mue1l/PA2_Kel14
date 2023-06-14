<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hasiltani;
use Illuminate\Http\Request;

class HasiltaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hasiltani = Hasiltani::all();
        return view('pages.admin.hasiltani.main', compact('hasiltani'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.hasiltani.create');
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
            'nama' => 'required',
            'avatar' => 'required',
            'deskripsi' => 'required'
        ]);

        $path = public_path('images/hasiltani');
        $avatar = $request->file('avatar');
        $avatar_name = $avatar->getClientOriginalName();
        $avatar->move($path, $avatar_name);

        Hasiltani::create([
            'nama' => $request->nama,
            'avatar' => $avatar_name,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('admin.hasiltani.index')->with('success', 'Hasil Pertanian Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hasiltani  $hasiltani
     * @return \Illuminate\Http\Response
     */
    public function show(Hasiltani $hasiltani)
    {
        $hasiltanis = Hasiltani::all();
        return view('pages.web.pertanian.hasiltani.hasilpertanian', compact('hasiltanis'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hasiltani  $hasiltani
     * @return \Illuminate\Http\Response
     */
    public function edit(Hasiltani $hasiltani)
    {
        return view('pages.admin.hasiltani.edit', compact('hasiltani'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hasiltani  $hasiltani
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hasiltani $hasiltani)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);
        $avatar_name = $hasiltani->avatar;
        if ($request->hasFile('avatar')) {
            $oldFile = public_path('images/hasiltani/' . $hasiltani->avatar);
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
            $path = public_path('images/hasiltani');
            $avatar = $request->file('avatar');
            $avatar_name = $avatar->getClientOriginalName();
            $avatar->move($path, $avatar_name);
        }
        $hasiltani->update([
            'nama' => $request->nama,
            'avatar' => $avatar_name,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('admin.hasiltani.index')->with('success', 'Hasil Pertanian Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hasiltani  $hasiltani
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hasiltani $hasiltani)
    {
        $oldFile = public_path('images/hasiltani/' . $hasiltani->avatar);
        if (file_exists($oldFile)) {
            unlink($oldFile);
        }
        $hasiltani->delete();
        return redirect()->route('admin.hasiltani.index')->with('success', 'Perangkat Berhasil Dihapus');
    }
}
