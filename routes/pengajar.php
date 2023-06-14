<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PendaftarController;
use App\Http\Controllers\Admin\DashboardpengajarController;
use App\Http\Controllers\Admin\DatasiswaController;
use App\Http\Controllers\Admin\PembayaranController;
use App\Http\Controllers\Admin\PembayarandaftarController;
use App\Http\Controllers\Admin\PengaturanpendaftranController;
use App\Http\Controllers\Web\DashboardController as WebDashboardController;
use App\Models\Dataanak;
use App\Models\Pendaftaran;

Route::prefix('pengajar')->name('pengajar.')->group(function () {
    Route::group(['middleware' => ['auth', 'role:pengajar']], function () {
        Route::post('signout', [AuthController::class, 'signOut'])->name('signout');
        Route::get('/dashboard', [DashboardpengajarController::class, 'index'])->name('pengajar.dashboard.main');
        Route::get('/pendaftaran', [PendaftarController::class, 'index'])->name('pendaftaran.main');
        Route::post('/pendaftar/gambar/{id}', [PendaftarController::class, 'show'])->name('pengajar.pendaftaran.show');
        Route::patch('pendaftaran/{pendaftaran}/terima', [PendaftarController::class, 'terima'])->name('pendaftaran.terima');
        Route::patch('pendaftaran/{pendaftaran}/tolak', [PendaftarController::class, 'tolak'])->name('pendaftaran.tolak');
        Route::resource('pembayaran', PembayaranController::class);
        Route::resource('pengaturanpendaftaran', PengaturanpendaftranController::class);
        Route::resource('anakpembayaran', PembayarandaftarController::class);
        Route::patch('anakpembayaran/{anakpembayaran}/terima', [PembayarandaftarController::class, 'terima'])->name('pembayaran.terima');
        Route::patch('anakpembayaran/{anakpembayaran}/tolak', [PembayarandaftarController::class, 'tolak'])->name('pembayaran.tolak');
        Route::get('/pengajar/pengajar/pengajar/pengajar/pendaftaran/export-pdf', [PendaftarController::class, 'exportPDF'])->name('pengajar.pengajar.pengajar.pengajar.pendaftaran.export-pdf');
        Route::get('pengajar/pengajar/pengajar/pengajar/pembayaran/export-pdf', [PembayarandaftarController::class, 'exportPDF1'])->name('pengajar.pengajar.pengajar.pengajar.pembayaran.export-pdf');
        Route::resource('dataanak', DatasiswaController::class);
        Route::get('pengajar/anakpembayaran/{id}',[PembayarandaftarController::class, 'show2']);
    });
});
