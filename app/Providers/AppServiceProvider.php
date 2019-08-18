<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Auth;
use DB;

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
        //
        Schema::defaultStringLength(191);
        date_default_timezone_set('Asia/Jakarta');
        //Get ID when login to passing all view
        View::composer('*', function($view)
        {
            $idLogin = Auth::User()->PROFILEUSERS_ID;
            $dataIMG = DB::table('users')
            ->join('profileusers', 'users.PROFILEUSERS_ID', '=', 'profileusers.PROFILE_ID')
            ->select('users.PROFILEUSERS_ID', 'profileusers.GAMBAR')
            ->where('profileusers.PROFILE_ID', '=', $idLogin )
            ->first();
            View::share('dataIMG', $dataIMG);
        });
    }
}
