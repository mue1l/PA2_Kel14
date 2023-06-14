<?php

namespace App\Http\Controllers\Web;

use stdClass;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\pengaturanpendaftaran;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    public function index(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('loginError', 'Silahkan login terlebih dahulu sebelum melakukan pendaftaran!');;
        }
        $pendaftaran = Pendaftaran::all();
        $pendaftaran = Pengaturanpendaftaran::all();
        $pendaftaran = Pendaftaran::join('users', 'users.id', '=', 'pendaftaran.user_id')
            ->select('users.*', 'pendaftaran.*')
            ->where('user_id', auth()->user()->id)
            ->get();



        $statusPendaftaran = Pengaturanpendaftaran::first()->status_pendaftaran; // Gantilah dengan fungsi untuk mendapatkan status pendaftaran, misalnya dari database
        // dd($statusPendaftaran);
        if ($statusPendaftaran === 'buka') {
            return view('pages.web.pendaftaran.create', compact('pendaftaran'));
        } else {
            return view('pages.web.pendaftaran.close');
        }

        // }

    }

    public function storePendaftaran(Request $request)
    {
        $jumlahPendaftar = Pendaftaran::count();

        if ($jumlahPendaftar >= 50) {
            return redirect()->route('pendaftaran.index')->with('error', 'Maaf, kuota pendaftaran sudah penuh.');
        }
        // dd($request->all());
        $request->validate([
            'nama_anak' => 'required',
            'tanggal_lahir' => 'required',
            'umur' => 'required|min:5|max:7',
            'jenis_kelamin' => 'required',
            'nama_orangtua' => 'required',
            'alamat' => 'required',
            'avatar' => 'required|image|mimes:png|max:2048',
        ], [
            'avatar.mimes' => 'Gambar harus berformat JPG atau PNG',
            'umur.min' => 'Umur minimal 5 tahun',
            'umur.max' => 'Umur maksimal 7 tahun',
        ]);

        $pendaftaran = new Pendaftaran();
        $pendaftaran->user_id = Auth::user()->id;
        $pendaftaran->nama_anak = $request->nama_anak;
        $pendaftaran->tanggal_lahir = $request->tanggal_lahir;
        $pendaftaran->umur = $request->umur;
        $pendaftaran->jenis_kelamin = $request->jenis_kelamin;
        $pendaftaran->nama_orangtua = $request->nama_orangtua;
        $pendaftaran->alamat = $request->alamat;
        $pendaftaran->pemberitahuan = $request->pemberitahuan;
        $pendaftaran->status = 'menunggu';


        $path = public_path('images/pendaftaran');
        $avatar = $request->file('avatar');
        $avatar_name = $avatar->getClientOriginalName();
        $avatar->move($path, $avatar_name);

        $pendaftaran->avatar = $avatar_name;
        $pendaftaran->save();

        // $pemberitahuan = new stdClass();
        // $pemberitahuan->pemberitahuan = 'Selamat, Anak anda lolos!. Silahkan melakukan pembayaran pada link berikut.';
        // $pemberitahuan->link_pembayaran = 'https://contoh.com';

        //  return view('pemberitahuan', ['pendaftaran' => $pemberitahuan]);


        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran anak anda berhasil!');
    }

    public function show(Pendaftaran $pendaftaran)
    {
        $pendaftaran = Pendaftaran::all();
        return view('pages.web.pendaftaran.index', compact('pendaftaran'));
    }
}
