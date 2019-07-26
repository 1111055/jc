<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\BannerLine;
use App\Pagebanner;
use App\Banner;
use App\Pagina;
use App\Produto;
use App\Bannerproduto;
Use Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $banner = PageBanner::getBannerFormPage(1);
      $pagina = Pagina::find(1);
      $moreview = Produto::where('activo','=','1')->orderby("visualizado","desc")
      ->take(8)->get();


      $requisitado = Produto::where('activo','=','1')->orderby("requisitado","desc")
      ->take(5)->get();

      $ultimasentradas = Produto::where('activo','=','1')->orderby("created_at","desc")
      ->take(10)->get();


      $prodtmp = Bannerproduto::all();

     // dd($prodtmp);
      $collection = Bannerproduto::where('banner_id','>','0')->orderBy('banner_id','asc')->get()->groupBy('banner_id');
     
       foreach ($collection as $key => $value) {
              foreach ($value as $key => $item) {
                 if($item->produto != null){
                  if($item->produto->path != null){
                    $firstname = explode('/', trim($item->produto->path));
                    if (!file_exists(public_path('/img/Produtos/CROP/'.last($firstname)))){
                           $item->produto->path = request()->root().'/img/Produtos/CROP/noimage.png';
                    }
                    }else{
                           $item->produto->path = request()->root().'/img/Produtos/CROP/noimage.png';
                    }
                  }
                  if ($item->categoria_id != null) {
                    if($item->categoria->id != null){
                        foreach ($item->categoria->produtos as $key => $item) {

                           if($item->path != null){
                            $firstname = explode('/', trim($item->path));
                            if (!file_exists(public_path('/img/Produtos/CROP/'.last($firstname)))){
                                   $item->path = request()->root().'/img/Produtos/CROP/noimage.png';
                            }
                            }else{
                                   $item->path = request()->root().'/img/Produtos/CROP/noimage.png';
                            }

                          }

                    }
                  }
              }
       }

  //dd($collection);

      foreach ($moreview as $key => $value) {
          if($value->path != null){
             $firstname = explode('/', trim($value->path));
            if (!file_exists(public_path('/img/Produtos/CROP/'.last($firstname)))) {

                     $value->path = request()->root().'/img/Produtos/CROP/noimage.png';
             }
          }else{
                     $value->path = request()->root().'/img/Produtos/CROP/noimage.png';
          }
      }


      foreach ($requisitado as $key => $value) {
          if($value->path != null){
             $firstname = explode('/', trim($value->path));
            if (!file_exists(public_path('/img/Produtos/CROP/'.last($firstname)))) {

                     $value->path = request()->root().'/img/Produtos/CROP/noimage.png';
             }
          }else{
                     $value->path = request()->root().'/img/Produtos/CROP/noimage.png';
          }
      }

      foreach ($ultimasentradas as $key => $value) {
          if($value->path != null){
             $firstname = explode('/', trim($value->path));
            if (!file_exists(public_path('/img/Produtos/CROP/'.last($firstname)))) {

                     $value->path = request()->root().'/img/Produtos/CROP/noimage.png';
             }
          }else{
                     $value->path = request()->root().'/img/Produtos/CROP/noimage.png';
          }
       }




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


       if(session()->has('bagone')){

            foreach (session()->get('bagone') as $key => $value) {
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

      


                
      foreach ($banner as $key => $value) {

                $_banner = Banner::find($value->id);
               
               if($_banner != null){
                    if($_banner->activo == 1){

                      $bannerline[] = BannerLine::getBannerHome($value->id);

                       
                    }
                
               }
      }
      
        return view('frontend.index',compact('pagina','bannerline','moreview','requisitado','ultimasentradas','collection'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
