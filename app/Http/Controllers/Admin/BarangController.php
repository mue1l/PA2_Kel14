<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barang = Barang::all();
        return view('pages.admin.barang.main', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.barang.create');
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
            'nama' => 'required',
            'jumlah' => 'required',
            'avatar' => 'required'
        ]);

        $path = public_path('images/barang');
        $avatar = $request->file('avatar');
        $avatar_name = $avatar->getClientOriginalName();
        $avatar->move($path, $avatar_name);

        Barang::create([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'avatar' => $avatar_name
        ]);

        return redirect()->route('admin.barang.index')->with('success', 'Barang Berhasil Ditambahkan');
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
    public function edit(Barang $barang)
    {
        return view('pages.admin.barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama' => 'required',
            'jumlah' => 'required',
        ]);
        $avatar_name = $barang->avatar;
        if ($request->hasFile('avatar')) {
            $oldFile = public_path('images/barang/' . $barang->avatar);
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
            $path = public_path('images/barang');
            $avatar = $request->file('avatar');
            $avatar_name = $avatar->getClientOriginalName();
            $avatar->move($path, $avatar_name);
        }
        $barang->update([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'avatar' => $avatar_name
        ]);

        return redirect()->route('admin.barang.index')->with('success', 'Barang Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $oldFile = public_path('images/barang/' . $barang->avatar);
        if (file_exists($oldFile)) {
            unlink($oldFile);
        }
        $barang->delete();

        return redirect()->route('admin.barang.index')->with('success', 'Barang Berhasil Dihapus');
    }
}
