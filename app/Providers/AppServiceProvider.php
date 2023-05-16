<?php

namespace App\Providers;

use App\Models\Peminjaman;
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
            if(Auth::check()){
                $pinjam = Peminjaman::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();
                $view->with('pinjam', $pinjam);
            }
        });
    }
}
