<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use URL;
use App\Menu;
use App\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
         URL::forceScheme('https');

        $menus = Menu::getAllMenu();
        $setting = Setting::getAllSettings();


                 

       //dd($setting);

       // Session::put('menu', $cart); 

         View::share('menu', $menus);
         View::share('setting', $setting);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
