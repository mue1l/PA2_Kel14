<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lembaga;
use Illuminate\Http\Request;

class LembagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lembaga = Lembaga::all();
        return view('pages.admin.lembaga.main', compact('lembaga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.lembaga.create');
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
            'name' => 'required',
            'position' => 'required',
            'address' => 'required',
            'avatar' => 'required'
        ]);

        $path = public_path(',00t');
        $avatar = $request->file('avatar');
        $avatar_name = $avatar->getClientOriginalName();
        $avatar->move($path, $avatar_name);

        Lembaga::create([
            'name' => $request->name,
            'position' => $request->position,
            'address' => $request->address,
            'avatar' => $avatar_name
        ]);

        return redirect()->route('admin.lembaga.index')->with('success', 'Lembaga desa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lembaga  $lembaga
     * @return \Illuminate\Http\Response
     */
    public function show(Lembaga $lembaga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lembaga  $lembaga
     * @return \Illuminate\Http\Response
     */
    public function edit(Lembaga $lembaga)
    {
        return view('pages.admin.lembaga.edit', compact('lembaga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lembaga  $lembaga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lembaga $lembaga)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'address' => 'required'
        ]);
        $avatar_name = $lembaga->avatar;
        if ($request->hasFile('avatar')) {
            $oldFile = public_path('images/lembaga/' . $lembaga->avatar);
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
            $path = public_path('images/lembaga');
            $avatar = $request->file('avatar');
            $avatar_name = $avatar->getClientOriginalName();
            $avatar->move($path, $avatar_name);
        }
        $lembaga->update([
            'name' => $request->name,
            'position' => $request->position,
            'address' => $request->address,
            'avatar' => $avatar_name
        ]);

        return redirect()->route('admin.lembaga.index')->with('success', 'Lembaga desa berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lembaga  $lembaga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lembaga $lembaga)
    {
        $oldFile = public_path('images/lembaga/' . $lembaga->avatar);
        if (file_exists($oldFile)) {
            unlink($oldFile);
        }
        $lembaga->delete();

        return redirect()->route('admin.lembaga.index')->with('success', 'Lembaga desa berhasil Dihapus');

    }
}
