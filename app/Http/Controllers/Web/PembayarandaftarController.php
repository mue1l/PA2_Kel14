<?php

namespace App\Http\Controllers\Web;

use App\Models\pemmbayaranpendaftaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\pembayarandaftar;

class PembayarandaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.web.pembayaran.create');
    }
    // C:\laragon\www\SIDESI_PA2\resources\views\pages\web\pembayaran\index.blade.php
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('loginError', 'Silahkan login terlebih dahulu sebelum melakukan pendaftaran!');;
        }
        // dd($request);
        // Validate the request data
        $request->validate([
            'nama_anak' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'umur' => 'required|string|min:5|max:7',
            'jenis_kelamin' => 'required',
            'nama_orangtua' => 'required|string',
            'alamat' => 'required|string',
            'image' => 'required|image|mimes:png|max:2048',
        ], [
            'image.mimes' => 'Gambar harus berformat JPG atau PNG',
            'umur.min' => 'Umur minimal 5 tahun',
            'umur.max' => 'Umur maksimal 7 tahun',
        ]);

        // dd($request);
        // Store the image file
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        // Create a new pembayarandaftar record
        $pembayarandaftar = PembayaranDaftar::create([
            'nama_anak' => $request->input('nama_anak'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'umur' => $request->input('umur'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'nama_orangtua' => $request->input('nama_orangtua'),
            'alamat' => $request->input('alamat'),
            'image' => $imageName, // Save the image filename in the database
            'user_id' => $request->user()->id,
        ]);
        // dd($pembayarandaftar);
        // Redirect to the index page or show a success message
        return view('pages.web.pembayaran.show')->with('success', 'Pembayaran Daftar created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembayarandaftar  $pembayarandaftar
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $riwayatanak = pembayarandaftar::join('users', 'users.id', '=', 'pembayaranpendaftaran.user_id')
            ->select('users.*', 'pembayaranpendaftaran.*')
            ->where('user_id', auth()->user()->id)
            ->get();
        // dd($request_surat);
        return view('pages.web.pembayaran.index2', compact('riwayatanak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembayarandaftar  $pembayarandaftar
     * @return \Illuminate\Http\Response
     */
    public function edit(pembayarandaftar $pembayarandaftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembayarandaftar  $pembayarandaftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembayarandaftar $pembayarandaftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembayarandaftar  $pembayarandaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembayarandaftar $pembayarandaftar)
    {
        //
    }
}
