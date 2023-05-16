<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Perangkat;
use Illuminate\Http\Request;

class PerangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perangkat = Perangkat::all();
        return view('pages.admin.perangkat.main', compact('perangkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.perangkat.create');
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
            'name' => 'required',
            'position' => 'required',
            'address' => 'required',
            'avatar' => 'required'
        ]);

        $path = public_path(',00t');
        $avatar = $request->file('avatar');
        $avatar_name = $avatar->getClientOriginalName();
        $avatar->move($path, $avatar_name);

        Perangkat::create([
            'name' => $request->name,
            'position' => $request->position,
            'address' => $request->address,
            'avatar' => $avatar_name
        ]);

        return redirect()->route('admin.perangkat.index')->with('success', 'Perangkat Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perangkat  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function show(Perangkat $perangkat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perangkat  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function edit(Perangkat $perangkat)
    {
        return view('pages.admin.perangkat.edit', compact('perangkat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perangkat  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perangkat $perangkat)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'address' => 'required'
        ]);
        $avatar_name = $perangkat->avatar;
        if ($request->hasFile('avatar')) {
            $oldFile = public_path('images/perangkat/' . $perangkat->avatar);
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
            $path = public_path('images/perangkat');
            $avatar = $request->file('avatar');
            $avatar_name = $avatar->getClientOriginalName();
            $avatar->move($path, $avatar_name);
        }
        $perangkat->update([
            'name' => $request->name,
            'position' => $request->position,
            'address' => $request->address,
            'avatar' => $avatar_name
        ]);

        return redirect()->route('admin.perangkat.index')->with('success', 'Perangkat Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perangkat  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perangkat $perangkat)
    {
        $oldFile = public_path('images/perangkat/' . $perangkat->avatar);
        if (file_exists($oldFile)) {
            unlink($oldFile);
        }
        $perangkat->delete();

        return redirect()->route('admin.perangkat.index')->with('success', 'Perangkat Berhasil Dihapus');
    }
}
