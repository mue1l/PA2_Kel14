<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Support\Facades\Auth;
use App\Models\Requestsurat;

class RequestsuratController extends Controller
{
    public function index(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('loginError', 'Silahkan login terlebih dahulu sebelum melakukan request surat!');;
        }
        // $request_surat = Requestsurat::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();
        $request_surat = Requestsurat::join('users', 'users.id', '=', 'requestsurat.user_id')
            ->select('users.*', 'requestsurat.*')
            ->where('user_id', auth()->user()->id)
            ->get();
        // dd($request_surat);
        return view('pages.web.requestsurat.main', compact('request_surat'));
    }

    public function show(Requestsurat $request_surat)
    {
        $berita = Berita::all();

        $request_surat = Requestsurat::all();
        return view('pages.web.requestsurat.create', compact('request_surat', 'berita'));
    }

    public function storeRequestsurat(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'deskripsi' => 'required',
            'tujuan' => 'required'
        ]);
        $request_surat = new Requestsurat();
        $request_surat->user_id = Auth::user()->id;
        $request_surat->deskripsi = $request->deskripsi;
        $request_surat->tujuan = $request->tujuan;
        $request_surat->pemberitahuan = $request->pemberitahuan;
        $request_surat->status = 'menunggu';
        $request_surat->save();

        return redirect()->route('requestsurat.index')->with('success', 'Surat yang diminta berhasil dikirim');
    }
}
