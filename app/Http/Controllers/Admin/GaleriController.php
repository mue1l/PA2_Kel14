<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('pages.admin.galeri.main', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.galeri.create');
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
            'avatar' => 'requiredimage|mimes:jpg,png',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        $path = public_path('images/galeri');
        $avatar = $request->file('avatar');
        $avatar_name = $avatar->getClientOriginalName();
        $avatar->move($path, $avatar_name);


        Galeri::create([
            'avatar' => $avatar_name,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'created_by' => Auth::user()->id
        ]);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        return view('pages.admin.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'avatar' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);
        $avatar_name = $galeri->avatar;
        if ($request->hasFile('avatar')) {
            $oldFile = public_path('images/galeri/' . $galeri->avatar);
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
            $path = public_path('images/galeri');
            $avatar = $request->file('avatar');
            $avatar_name = $avatar->getClientOriginalName();
            $avatar->move($path, $avatar_name);
        }
        $galeri->update([
            'avatar' => $avatar_name,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'created_by' => Auth::user()->id
        ]);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        $oldFile = public_path('images/galeri/' . $galeri->avatar);
        if (file_exists($oldFile)) {
            unlink($oldFile);
        }
        $galeri->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri Berhasil Dihapus');
    }
}
