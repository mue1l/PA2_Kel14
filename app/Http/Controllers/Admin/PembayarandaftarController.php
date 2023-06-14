<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\pembayarandaftar;
use PDF;



use function PHPUnit\Framework\returnSelf;

class PembayarandaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayarandaftar = pembayarandaftar::all();
        return view('pages.pengajar.pembayaran.index', compact('pembayarandaftar'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $bayar = pembayarandaftar::find($id);
        // $pendaftaran = Pendaftaran::join('users', 'users.id', '=', 'pendaftaran.user_id')
        //     ->select('users.*', 'pendaftaran.*')
        //     // ->where('user_id', auth()->user()->id)
        //     ->get();
        // $pendaftaran = Pendaftaran::all();
        $pembayarandaftar = pembayarandaftar::where('id', '=', $bayar)->get();
        // dd($pend);
        return view('pages.pengajar.pembayaran.view', compact('bayar'));
    }

    public function show2($id)
    {
        $pembayarandaftar = pembayarandaftar::find($id);
        return view('pages.pengajar.rekapanpendaftaran.create', compact('pembayarandaftar'));
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

    public function terima($id)
    {
        $pembayarandaftar =  pembayarandaftar::findOrFail($id);
        $pembayarandaftar->status = 'diterima';
        $pembayarandaftar->pemberitahuan = 'Pembayaran untuk pendaftaran anak anda diterima!';
        $pembayarandaftar->update();
        return redirect('pengajar/anakpembayaran')->with('success', 'Permintaan diterima');
    }

    public function tolak($id)
    {
        $pembayarandaftar =  pembayarandaftar::findOrFail($id);
        $pembayarandaftar->status = 'ditolak';
        $pembayarandaftar->pemberitahuan = 'Maaf, Pembayaran anda ditolak!';
        $pembayarandaftar->update();
        return redirect('pengajar/anakpembayaran')->with('success', 'Permintaan ditolak');
    }
    public function exportPDF1()
    {
        $pembayarandaftar = pembayarandaftar::all();

        $pdf = PDF::loadView('pages.pengajar.pembayaran.pdf', compact('pembayarandaftar'));

        return $pdf->download('data_pembayaran.pdf');
    }
}
