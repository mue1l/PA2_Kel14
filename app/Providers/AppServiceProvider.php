<?php

namespace App\Providers;

use App\Models\pembayarandaftar;
use App\Models\Peminjaman;
use App\Models\Pendaftaran;
use App\Models\Requestsurat;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('theme.app.header', function ($view) {
            if (Auth::check()) {
                $notif = Peminjaman::where('user_id', auth()->user()->id)->get();
                // $view->with('notif', $notif);
                $notifikasi = Requestsurat::where('user_id', auth()->user()->id)->get();
                $pendaftaran = Pendaftaran::where('user_id', auth()->user()->id)->get();
                $pembayaran = pembayarandaftar::where('user_id', auth()->user()->id)->get();

                $all_notif = $notif->concat($notifikasi)->concat($pendaftaran)->concat($pembayaran)->sortByDesc('updated_at');
                // $view->with('notifikasi', $notifikasi);
                $view->with('all_notif', $all_notif);
            }
        });
    }
}
