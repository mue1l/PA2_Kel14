<?php

namespace App\Http\Controllers\Admin;

use App\Models\Agenda;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agenda = Agenda::all();
        return view('pages.admin.agenda.main', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.agenda.create');
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
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        Agenda::create([
            'created_by' => Auth::user()->id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('admin.agenda.index')->with('success', 'Agenda Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        return view('pages.admin.agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        $request->validate([

            'judul' => 'required',
            'deskripsi' => 'required'
        ]);
        $agenda->update([
            'created_by' => Auth::user()->id,
            'judul' => $request->judul,
            'deskripsi'  =>  $request->deskripsi

        ]);

        return redirect()->route('admin.agenda.index')->with('success', 'Agenda Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        return redirect()->route('admin.agenda.index')->with('success', 'Agenda Berhasil Dihapus');
    }
}
