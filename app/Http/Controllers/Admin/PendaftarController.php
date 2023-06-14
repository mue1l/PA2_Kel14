<?php

namespace App\Http\Controllers\Admin;

use stdClass;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class PendaftarController extends Controller
{
    public function index(Request $request)
    {
        $pendaftaran = Pendaftaran::all();
        return view('pages.pengajar.pendaftaran.main', compact('pendaftaran'));
    }

    public function terima(Pendaftaran $pendaftaran)
    {
        $pendaftaran->status = 'diterima';

        // $pendaftaran = new stdClass();
        // $pesan = 'Selamat, Anak anda lolos!. Silahkan melakukan pembayaran pada link berikut. ';
        // $link = '<a href="' . $link_pendaftaran . '"></a>';
        // $pesan = str_replace('Silahkan melakukan pembayaran pada link berikut', $link, $pesan);
        $pendaftaran->pemberitahuan = 'Anak anda diterima!, Silahkan melakukan pembayaran pada halaman pembayaran pada menu pendidikan';
        // $pendaftaran->pemberitahuan = str_replace('Selamat, Anak anda lolos! Silahkan melakukan pembayaran pada link berikut', $pendaftaran, $pesan);
        // dd($pendaftaran);
        // $pendaftaran->update();

        // $link_pendaftaran = '<a href="https://www.contoh.com">tautan ini</a> untuk melanjutkan';
        // $pesan = 'Silahkan klik.' . $link_pendaftaran;
        // $pesan = "{{ url('bayar/create') }}";
        // $pesan = 'Selamat, Anak anda lolos!. Silahkan melakukan pembayaran pada <a href="' . $link_pendaftaran . '">link berikut</a>.';
        // $link = link_to($link_pendaftaran, $pesan);
        // $pendaftaran->pemberitahuan = $pesan;
        $pendaftaran->update();


        // return view('pemberitahuan', ['pendaftaran' => $pendaftaran]);
        return redirect('pengajar/pendaftaran')->with('success', 'Permintaan diterima');
    }

    public function tolak(Pendaftaran $pendaftaran)
    {
        $pendaftaran->status = 'ditolak';
        $pendaftaran->pemberitahuan = 'Maaf, Pendaftaran anda ditolak!';
        $pendaftaran->update();
        return redirect('pengajar/pendaftaran')->with('success', 'Permintaan ditolak');
    }

    public function show(Request $request, $id)
    {
        $pend = Pendaftaran::find($id);
        // $pendaftaran = Pendaftaran::join('users', 'users.id', '=', 'pendaftaran.user_id')
        //     ->select('users.*', 'pendaftaran.*')
        //     // ->where('user_id', auth()->user()->id)
        //     ->get();
        // $pendaftaran = Pendaftaran::all();
        $pendaftaran = Pendaftaran::where('id', '=', $pend)->get();
        // dd($pend);
        return view('pages.pengajar.pendaftaran.view', compact('pend'));
    }
    public function exportPDF()
    {
        $pendaftaran = Pendaftaran::all();

        $pdf = PDF::loadView('pages.pengajar.pendaftaran.pdf', compact('pendaftaran'));

        return $pdf->download('data_pendaftaran.pdf');
    }
}
