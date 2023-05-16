<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Requestsurat;

class RequestsuratController extends Controller
{
    public function index(Request $request)
    {
        $request_surat = Requestsurat::all();
        return view('pages.admin.requestsurat.main', compact('request_surat'));
    }

    public function terima(Requestsurat $request_surat)
    {
        $request_surat->status = 'diterima';
        $request_surat->pemberitahuan = 'Permintaan surat anda diterima, silahkan periksa dan download pada riwayat request surat anda';
        $request_surat->update();
        return redirect('admin/request')->with('success', 'Permintaan diterima');
    }

    public function tolak(Requestsurat $request_surat)
    {
        $request_surat->status = 'ditolak';
        $request_surat->pemberitahuan = 'Permintaan surat Anda Ditolak';
        $request_surat->update();
        return redirect('admin/request')->with('success', 'Permintaan ditolak');
    }

    public function upload(Request $request, $id)
    {
        $request->validate([
            'file_path' => 'required|mimes:pdf|max:10240' // file dengan ekstensi pdf dan ukuran maksimum 10MB
        ]);

        // dd($request->all());
        $filenameWithExt = $request->file('file_path')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('file_path')->getClientOriginalExtension();
        $filenameToStore = $filename.'_'.time().'.'.$extension;

        $file_path = $request->file_path->move(public_path('uploads/surat'), $filenameToStore);

        // $doc->update();

        $doc = Requestsurat::find($id);
        $doc->file_path = $filenameToStore;
        $doc->update();
        // $documentName = time() . '_' . $request->file('file_path')->getClientOriginalName();
        // $request->file('file_path')->storeAs('documents', $documentName);
        return redirect('admin/request')->with('success', 'blasbduoas');
        // return 'Dokumen berhasil diupload.';
    }
}
