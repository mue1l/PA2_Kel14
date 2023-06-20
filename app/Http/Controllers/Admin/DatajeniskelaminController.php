<?php

namespace App\Http\Controllers\Admin;

use App\Models\Datajeniskelamin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class DatajeniskelaminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datajeniskelamin = Datajeniskelamin::all();
        return view('pages.admin.datajeniskelamin.main', compact('datajeniskelamin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.datajeniskelamin.create');
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
            'jenis_kelamin' => 'required',
            'jumlah' => 'required',


        ]);

        Datajeniskelamin::create([
            'jenis_kelamin' => $request->jenis_kelamin,
            'jumlah' => $request->jumlah,


        ]);

        return redirect()->route('admin.datajeniskelamin.index')->with('success', 'Data Berdasarkan Jenis Kelamin Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datajeniskelamin  $datajeniskelamin
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = DB::table('databerdasarkanjeniskelamin')
            ->select('jenis_kelamin', DB::raw('SUM(jumlah) as total'))
            ->groupBy('jenis_kelamin')
            ->get();

        $chartData = [];
        foreach ($data as $item) {
            $chartData[] = [
                'name' => $item->jenis_kelamin,
                'y' => $item->total
            ];
        }

        return view('pages.admin.dashboard.jeniskelamin', compact('chartData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datajeniskelamin  $datajeniskelamin
     * @return \Illuminate\Http\Response
     */
    public function edit(Datajeniskelamin $datajeniskelamin)
    {
        return view('pages.admin.datajeniskelamin.edit', compact('datajeniskelamin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datajeniskelamin  $datajeniskelamin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datajeniskelamin $datajeniskelamin)
    {
        $request->validate([
            'jenis_kelamin' => 'required',
            'jumlah' => 'required',


        ]);

        $datajeniskelamin->update([
            'jenis_kelamin' => $request->jenis_kelamin,
            'jumlah' => $request->jumlah,

        ]);

        return redirect()->route('admin.datajeniskelamin.index')->with('success', 'Data Berdasarkan Jenis Kelamin Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datajeniskelamin  $datajeniskelamin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datajeniskelamin $datajeniskelamin)
    {
        $datajeniskelamin->delete();

        return redirect()->route('admin.datajeniskelamin.index')->with('success', 'Data Berdasarkan Jenis Kelamin Berhasil Dihapus');
    }
}
