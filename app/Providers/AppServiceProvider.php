<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use URL;
use App\Menu;
use App\Setting;
use App\Pagina;

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
        // URL::forceScheme('https');



        $menus = Menu::getAllMenu();
        $setting = Setting::getAllSettings();
        $page = Pagina::getPagina();


                 

      // dd($menus);

       // Session::put('menu', $cart); 

         View::share('menu', $menus);
         View::share('setting', $setting);
         View::share('paginas', $page);

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
