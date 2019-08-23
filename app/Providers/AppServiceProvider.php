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
            if (Auth::check()){
                $idLogin = Auth::User()->PROFILEUSERS_ID;
                /*for profile picture */ 
                $dataIMG = DB::table('users')
                ->join('profileusers', 'users.PROFILEUSERS_ID', '=', 'profileusers.PROFILE_ID')
                ->select('users.PROFILEUSERS_ID', 'profileusers.GAMBAR')
                ->where('profileusers.PROFILE_ID', '=', $idLogin )
                ->first();
                View::share('dataIMG', $dataIMG);
                
                /*for notif UMKM*/
                $notif = DB::table('pmt_umkm')->where('IDUMKM', '=', $idLogin)->get();
                View::share('notif', $notif);
                /*for bell on notif */
                $countnotifUMKM = DB::table('pmt_umkm')->where('IDUMKM', '=', $idLogin)->count();
                View::share('countnotifUMKM', $countnotifUMKM);

                /*for notif Narasumber */
                $notifNarasumber = DB::table('pmt_umkm')
                ->whereRaw("IDNARASUMBER = '$idLogin' AND STATUSPMT ='WAIT' ")
                ->get();
                View::share('notifNarasumber', $notifNarasumber);
                /*for bell on notif */
                $countnotifNarsumber = DB::table('pmt_umkm')
                ->whereRaw("IDNARASUMBER = '$idLogin' AND STATUSPMT ='WAIT' ")->count();
                View::share('countnotifNarsumber', $countnotifNarsumber);

            }
        });
        
    }
}
