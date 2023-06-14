<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('pages.admin.berita.main', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.berita.create');
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
            'avatar' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        $path = public_path('images/berita');
        $avatar = $request->file('avatar');
        $avatar_name = $avatar->getClientOriginalName();
        $avatar->move($path, $avatar_name);


        Berita::create([
            'avatar' => $avatar_name,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'created_by' => Auth::user()->id
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $beritum)
    {
        return view('pages.admin.berita.edit', compact('beritum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'avatar' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        $avatar_name = $berita->avatar;
        if ($request->hasFile('avatar')) {
            $oldFile = public_path('images/berita/' . $berita->avatar);
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
            $path = public_path('images/berita');
            $avatar = $request->file('avatar');
            $avatar_name = $avatar->getClientOriginalName();
            $avatar->move($path, $avatar_name);
        }

        $berita->update([
            'avatar' => $avatar_name,
            'judul' => $request->judul,
            'deskripsi'  =>  $request->deskripsi,
            'created_by' => Auth::user()->id


        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        $oldFile = public_path('images/berita/' . $berita->avatar);
        if (file_exists($oldFile)) {
            unlink($oldFile);
        }
        $berita->delete();
        return redirect()->route('admin.berita.index')->with('success', 'Perangkat Berhasil Dihapus');
    }
}
