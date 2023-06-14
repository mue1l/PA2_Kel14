<?php

namespace App\Http\Controllers\Web;

use App\Models\Profildesa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfildesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profildesa = Profildesa::all();
        return view('pages.web.profildesa.index', compact('profildesa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profildesa  $profildesa
     * @return \Illuminate\Http\Response
     */
    public function show(Profildesa $profildesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profildesa  $profildesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Profildesa $profildesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profildesa  $profildesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profildesa $profildesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profildesa  $profildesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profildesa $profildesa)
    {
        //
    }
}
