<?php

namespace App\Http\Controllers\Web;

use App\Models\Pembayaran;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Models\pembayarandaftar;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\pengaturanpendaftaran;

class BayarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $anak = Pembayaran::all();
        if (Auth::check()) {
            $user = Auth::user()->id;

            $anak1 = Pendaftaran::where('user_id', $user)->first();

            if ($anak1) {
                if ($anak1->status === 'diterima') {
                    $a = Pembayaran::all();
                    return view('pages.web.pembayaran.create', compact('anak1', 'a'));
                }
            }
        }

        return view('pages.web.pembayaran.close', compact('anak'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $daftarpembayaran = pembayarandaftar::all();
        return view('pages.web.pembayaran.index', compact('daftarpembayaran'));
    }
    public function show2(Request $request)
    {

        // $pembayarandaftar = pembayarandaftar::join('users', 'users.id', '=', 'pembayarandaftar.user_id')
        //     ->select('users.*', 'pembayarandaftar.*')
        //     ->where('user_id', auth()->user()->id)
        //     ->get();
        // // dd($request_surat);
        // return view('pages.web.pembayaran.index2', compact('pembayarandaftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
