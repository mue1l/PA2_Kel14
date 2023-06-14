<?php

use App\Http\Controllers\Admin\AgendaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DatajeniskelaminController;
use App\Http\Controllers\Admin\DatapekerjaanpendudukController;
use App\Http\Controllers\Admin\DatapendudukController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\HasiltaniController;
use App\Http\Controllers\Admin\LembagaController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\PerangkatController;
use App\Http\Controllers\Admin\PeminjamanController;
use App\Http\Controllers\Admin\ProfildesaController;
use App\Http\Controllers\Admin\RequestsuratController;
use App\Models\Galeri;
use App\Models\HasilTani;
use App\Models\Requestsurat;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::group(['middleware' => ['auth', 'role:admin']], function () {
        Route::get('dashboard', [DashboardController::class, 'index']);
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
        Route::resource('datapenduduk', DatapendudukController::class);
        Route::get('/admin/admin/admin/admin/peminjaman/export-pdf', [PeminjamanController::class, 'exportPDF'])->name('admin.admin.admin.admin.peminjaman.export-pdf');
        Route::get('admin/admin/admin/admin/admin/requestsurat/export-pdf', [RequestsuratController::class, 'expordPDF'])->name('admin.admin.admin.admin.admin.requestsurat.export-pdf');
        Route::resource('profildesa', ProfildesaController::class);
        Route::resource('datajeniskelamin', DatajeniskelaminController::class);
        Route::resource('datapekerjaan', DatapekerjaanpendudukController::class);
    });
});
