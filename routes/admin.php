<?php

use App\Http\Controllers\Admin\AgendaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\HasiltaniController;
use App\Http\Controllers\Admin\LembagaController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\PerangkatController;
use App\Http\Controllers\Admin\PeminjamanController;
use App\Http\Controllers\Admin\RequestsuratController;
use App\Models\Galeri;
use App\Models\HasilTani;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::group(['middleware' => ['auth', 'role:admin']], function () {
        Route::get('dashboard', function () {
            return view('pages.admin.dashboard.main');
        });
        Route::resource('perangkat', PerangkatController::class);
        Route::resource('barang', BarangController::class);
        Route::resource('hasiltani', HasiltaniController::class);
        Route::resource('pengumuman', PengumumanController::class);
        // Route::resource('agenda', AgendaController::class);
        Route::resource('berita', BeritaController::class);
        Route::resource('galeri', GaleriController::class);
        Route::resource('lembaga', LembagaController::class);
        Route::get('peminjaman', [PeminjamanController::class, 'index'])->name(('peminjaman.main'));
        Route::patch('pinjam/{pinjam}/terima', [PeminjamanController::class, 'terima'])->name('pinjam.terima');
        Route::patch('pinjam/{pinjam}/tolak', [PeminjamanController::class, 'tolak'])->name('pinjam.tolak');
        Route::patch('pinjam/{pinjam}/denda', [PeminjamanController::class, 'denda'])->name('pinjam.denda');
        Route::get('request', [RequestsuratController::class, 'index'])->name(('requestsurat.main'));
        Route::patch('request/{request_surat}/terima', [RequestsuratController::class, 'terima'])->name('request_surat.terima');
        Route::patch('request/{request_surat}/tolak', [RequestsuratController::class, 'tolak'])->name('request_surat.tolak');
        Route::patch('request/{request_surat}/upload', [RequestsuratController::class, 'upload'])->name('request_surat.upload');
    });
});
