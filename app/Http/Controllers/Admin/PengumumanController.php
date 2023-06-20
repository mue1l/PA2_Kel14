<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $pengumuman = Pengumuman::where('judul', 'like', '%' . $request->search . '%')
        ->orderBy('id', 'DESC')
        ->paginate(3);
        $pengumuman = Pengumuman::all();
        return view('pages.admin.pengumuman.main', compact('pengumuman'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.pengumuman.create');
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

        $path = public_path('images/pengumuman');
        $avatar = $request->file('avatar');
        $avatar_name = $avatar->getClientOriginalName();
        $avatar->move($path, $avatar_name);

        Pengumuman::create([
            'avatar' => $avatar_name,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'created_by' => Auth::user()->id
        ]);

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('pages.admin.pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $request->validate([
            'avatar' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);
        $avatar_name = $pengumuman->avatar;
        if ($request->hasFile('avatar')) {
            $oldFile = public_path('images/pengumuman/' . $pengumuman->avatar);
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
            $path = public_path('images/pengumuman');
            $avatar = $request->file('avatar');
            $avatar_name = $avatar->getClientOriginalName();
            $avatar->move($path, $avatar_name);
        }
        $pengumuman->update([
            'avatar' => $avatar_name,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'created_by' => Auth::user()->id
        ]);

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        $oldFile = public_path('images/pengumuman/' . $pengumuman->avatar);
        if (file_exists($oldFile)) {
            unlink($oldFile);
        }
        $pengumuman->delete();
        return redirect()->route('admin.pengumuman.index')->with('success', 'Perangkat Berhasil Dihapus');
    }
}
