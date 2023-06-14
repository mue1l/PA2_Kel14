<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pekerjaan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatapekerjaanpendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapekerjaan = Pekerjaan::all();
        return view('pages.admin.datapekerjaan.main', compact('datapekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.datapekerjaan.create');
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
            'jenis_pekerjaan' => 'required',
            'jumlah' => 'required'
        ]);

        Pekerjaan::create([
            'jenis_pekerjaan' => $request->jenis_pekerjaan,
            'jumlah' => $request->jumlah
        ]);

        return redirect()->route('admin.datapekerjaan.index')->with('success', 'Data Berdasarkan Pekerjaan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $data = DB::table('pekerjaanpenduduk')
            ->select('jenis_pekerjaan', DB::raw('SUM(jumlah) as total'))
            ->groupBy('jenis_pekerjaan')
            ->get();

        $chartPekerjaan = [];
        foreach ($data as $item) {
            $chartPekerjaan[] = [
                'name' => $item->jenis_pekerjaan,
                'y' => $item->total
            ];
        }

        return view('pages.admin.dashboard.pekerjaan', compact('chartPekerjaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pekerjaan $pekerjaan)
    {
        return view('pages.admin.datapekerjaan.edit', compact('pekerjaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pekerjaan $pekerjaan)
    {
        $request->validate([
            'jenis_pekerjaan' => 'required',
            'jumlah' => 'required',
        ]);

        $pekerjaan->update([
            'jenis_pekerjaan' => $request->jenis_pekerjaan,
            'jumlah' => $request->jumlah
        ]);

        return redirect()->route('admin.datapekerjaan.index')->with('success', 'Data Berdasarkan Pekerjaan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pekerjaan $pekerjaan)
    {
        $pekerjaan->delete();

        return redirect()->route('admin.datapekerjaan.index')->with('success', 'Data Berdasarkan Pekerjaan Berhasil Dihapus');
    }
}
