<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Requestsurat;

class RequestsuratController extends Controller
{
    public function index(Request $request)
    {



        if (!Auth::check()) {
            return redirect()->route('login')->with('loginError', 'Silahkan login terlebih dahulu sebelum melakukan peminjaman!');;
        }
        $request_surat = Requestsurat::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();
        return view('pages.web.requestsurat.main', compact('request_surat'));
    }

    public function show(Requestsurat $request_surat)
    {

        $request_surat = Requestsurat::all();
        return view('pages.web.requestsurat.create', compact('request_surat'));
    }

    public function storeRequestsurat(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('loginError', 'Silahkan login terlebih dahulu sebelum melakukan peminjaman!');;
        }

        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required'
        ]);
        $request_surat = new Requestsurat();
        $request_surat->user_id = Auth::user()->id;
        $request_surat->name = $request->name;
        $request_surat->alamat = $request->alamat;
        $request_surat->deskripsi = $request->deskripsi;
        $request_surat->pemberitahuan = $request->pemberitahuan;
        $request_surat->status = 'menunggu';
        $request_surat->save();

        return redirect()->route('requestsurat.index')->with('success', 'Surat yang diminta berhasil dikirim');
    }
}
