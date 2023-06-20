<?php


use App\Models\Pembayaran;
use App\Models\Pendaftaran;
use App\Models\Requestsurat;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Web\BayarController;
use App\Http\Controllers\Web\BarangController;
use App\Http\Controllers\Web\BeritaController;
use App\Http\Controllers\Web\GaleriController;
use App\Http\Controllers\Web\LembagaController;
use App\Http\Controllers\Web\RiwayatController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\HasiltaniController;
use App\Http\Controllers\Web\PertanianController;
use App\Http\Controllers\Web\NotifikasiController;
use App\Http\Controllers\Web\PeminjamanController;
use App\Http\Controllers\Web\PengumumanController;
use App\Http\Controllers\Web\ProfildesaController;
use App\Http\Controllers\Admin\PerangkatController;
use App\Http\Controllers\Web\PendaftaranController;
use App\Http\Controllers\Web\RequestsuratController;
use App\Http\Controllers\Web\PembayarandaftarController;
use App\Http\Controllers\Web\PerangkatController as WebPerangkatController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('mainDashboard', function () {
    return view('pages.web.dashboard.mainDashboard');
});
Route::get('/dashboard', [HomeController::class, 'show'])->name('dashboard.mainDashboard');
Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [AuthController::class,  'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::post('signout', [AuthController::class, 'signOut'])->name('signout');
Route::get('/hasiltani', [HasiltaniController::class, 'index'])->name('hasiltani.index');
Route::get('/detail/{hasiltani}', [HasiltaniController::class, 'show'])->name('hasiltani.show');
Route::get('/barang', [BarangController::class, 'index'])->name('alattani.index');
Route::get('/detailpertanian', [PertanianController::class, 'index'])->name('pertanian.show');
Route::get('/perangkatdesa', [WebPerangkatController::class, 'index'])->name('perangkat.index');
Route::get('/lembagadesa', [LembagaController::class, 'index'])->name('lembaga.index');
Route::get('/pengumumandesa', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('detailpengumuman/{pengumuman}', [PengumumanController::class, 'show'])->name(('pengumuman.show'));
Route::get('/beritadesa', [BeritaController::class, 'index'])->name('berita.index');
Route::get('detailberita/{berita}', [BeritaController::class, 'show'])->name(('berita.show'));
Route::get('galeridesa', [GaleriController::class, 'index'])->name(('galeri.index'));
Route::get('show_barang/{id}', [BarangController::class, 'show']);
// Route::get('/peminjaman/{id}', [PeminjamanController::class, 'createPeminjaman']);
Route::post('/peminjaman/simpan', [PeminjamanController::class, 'storePeminjaman']);
Route::get('/riwayatpeminjaman', [RiwayatController::class, 'index'])->name('alattani.show');
Route::get('/requestsurat', [RequestsuratController::class, 'index'])->name('requestsurat.index');
Route::post('/request/simpan', [RequestsuratController::class, 'storeRequestsurat']);
Route::get('show_surat', [RequestsuratController::class, 'show'])->name('requestsurat.create');
Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('app.header');
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.create');
Route::post('/pendaftaran/simpan', [PendaftaranController::class, 'storePendaftaran'])->name('pendaftaran.store');
Route::get('/pendaftaran/notif', [PendaftaranController::class, 'show'])->name('pendaftaran.index');
Route::resource('bayar', BayarController::class);
Route::get('show_bayar/{id}', [BayarController::class, 'show_form']);
Route::resource('pembayarandaftar', PembayarandaftarController::class);
// Route::get('/show_bayar', [PembayarandaftarController::class, 'show'])->name('pembayaran.show');
Route::get('pembayaran', [PembayarandaftarController::class, 'pembayaran'])->name('pembayaran');
Route::resource('profildesa', ProfildesaController::class);
Auth::routes(['verify'=>true]);
