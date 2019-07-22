<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use URL;
use App\Menu;
use App\Setting;
use App\Pagina;
use App\Prazos;
use App\Social;
use App\Categoria;

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



        $menus     = Menu::getAllMenu();
        $prazos    = Prazos::getPrazos();
        $menuf     = Menu::getMenuFooter();
        $setting   = Setting::getAllSettings();
        $page      = Pagina::getPagina();
        $social    = Social::getSocial();
        $categoria = Categoria::getCategorias();    



       if(session()->has('wish')){

            foreach (session()->get('wish') as $key => $value) {
                if($value->path != null){
                     $firstname = explode('/', trim($value->path));
                    if (!file_exists(public_path('/img/Produtos/CROP/'.last($firstname)))) {

                             $value->path = request()->root().'/img/Produtos/CROP/noimage.png';
                     }
               }else{
                         $value->path = request()->root().'/img/Produtos/CROP/noimage.png';
               }
            }
        }


      // dd($categoria);

       // Session::put('menu', $cart); 

         View::share('menu', $menus);
         View::share('menufooter', $menuf);
         View::share('setting', $setting);
         View::share('paginas', $page);
         View::share('prazos', $prazos);
         View::share('socials', $social);
         View::share('categoriasmenu', $categoria);
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
