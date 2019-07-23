<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategoria;
use App\Produto;
use App\ProdutoCor;
use App\ProdutoSize;
use Illuminate\Support\Arr;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dd("teste");
        return view('frontend.shop');
    }

    public function list($id)
    {



              $subcat = Subcategoria::find($id);

              $subcategoria = $id;
              
               $familia  = array();
               $cores    = array();
               $tamanhos = array();

               $produtos = Produto::Where('activo','=','1')->Where('subcategoria_id','=',$id)->orderBy('ordem','asc')->get();
               

               //dd($produtos);

                foreach ($produtos as $key => $variable) 
                {
                   
                  if(count($variable) > 0){

                        if(isset($variable->familia['titulo'])){
                               $familia[] = array('titulo' => $variable->familia['titulo'], 'id' => $variable->familia['id'], 'checked' => false);
                        }
                        
                        foreach ($variable->produtocor as $key => $value) {
                                 $cores[] = array('cor' =>  $value->cor['cor'], 'id' => $value['id'], 'checked' => false);
                        }
                        foreach ($variable->produtosize as $key => $value) {
                                     $tamanhos[] = array('size' =>  $value->size['tamanho'], 'id' => $value['id'], 'checked' => false);
                        }
                  }     
               
                }

                        $array = [];

                        if(count($familia) > 0){
                           $array = Arr::prepend($array, $familia);
                        }
                        if(count($cores) > 0){
                           $array = Arr::prepend($array, $cores);
                        }
                        if(count($tamanhos) > 0){
                           $array = Arr::prepend($array, $tamanhos);
                        }

                        // dd($array);
                       session(['filter' => $array]);


                     // dd(session('filter'));
            

              foreach ($produtos as $key => $value) {
                  
                  if($value->path != null){
                    
                     $firstname = explode('/', trim($value->path));
                    if (!file_exists(public_path('/img/Produtos/CROP/'.last($firstname)))) {

                            $produtos[$key]->path = request()->root().'/img/Produtos/CROP/noimage.png';
                    }
                    }else{
                        
                            $produtos[$key]->path = request()->root().'/img/Produtos/CROP/noimage.png';
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

      
       
        return view('frontend.shop',compact('produtos','subcat'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $_familia        = $request->familia;
        $_colors         = $request->colors;
        $_sizes          = $request->sizes;
        $subcategoria    = $request->subcategoria;


       $familia  = array();
       $cores    = array();
       $tamanhos = array();

      // dd($_familia);   
        if(count($_colors) > 0){
           $cor  = ProdutoCor::whereIn('color_id',$_colors)->pluck('produto_id')->toArray();
        }
        if(count($_sizes) > 0){
           $size = ProdutoSize::whereIn('size_id',$_sizes)->pluck('produto_id')->toArray();
        }
       

        $produtos = Produto::
                    Where('activo','=','1')->Where('subcategoria_id','=',$subcategoria)->orderBy('ordem','asc');

        //dd($produtos);    

        if(count($_colors) > 0){
            $produtos = $produtos->whereIn('id', $cor);
        }       
        if(count($_sizes) > 0){
            $produtos = $produtos->whereIn('id', $size);
        } 

        if(count($_colors) > 0){
            $produtos = $produtos->whereIn('familia_id', $_familia);
        }

        $produtos =  $produtos->get(); 
        $subcat = Subcategoria::find($subcategoria);

        foreach ($produtos as $key => $variable) 
        {
           
          if(count($variable) > 0){

               $_familia[] = array('titulo' => $variable->familia['titulo'], 'id' => $variable['id']);
                
                foreach ($variable->produtocor as $key => $value) {
                         $cores[] = array('cor' =>  $value->cor['cor'], 'id' => $value['id']);

                }
                foreach ($variable->produtosize as $key => $value) {
                             $tamanhos[] = array('size' =>  $value->size['tamanho'], 'id' => $value['id']);

                }
          }     
       
        }


          foreach ($produtos as $key => $value) {
              
              if($value->path != null){
                
                 $firstname = explode('/', trim($value->path));
                if (!file_exists(public_path('/img/Produtos/CROP/'.last($firstname)))) {

                        $produtos[$key]->path = request()->root().'/img/Produtos/CROP/noimage.png';
                }
                }else{
                    
                        $produtos[$key]->path = request()->root().'/img/Produtos/CROP/noimage.png';
                      //  dd($produtos[$key]->path);
                }
            //  dd($produtos[$key]);
          }

                $array = [];

                
                    $arrtmp = session('filter')[2];


                     if(count($_familia) > 0){
                        foreach ($arrtmp as $key => $value) {
                            foreach ($_familia  as $_key => $lin) {
                               if($lin == $value['id']){

                                     $arrtmp[$_key]['checked'] = true;
                                }
                            }
                               
                         } 
                     }

                     $array = Arr::prepend($array, $arrtmp);
                 

               
              
                    $arrtmp = session('filter')[1];
                    if(count($_colors) > 0){
                        foreach ($arrtmp as $key => $value) {
                            foreach ($_colors  as $_key => $lin) {
                               if($lin == $value['id']){
                                     $arrtmp[$_key]['checked'] = true;
                                }
                            }
                               
                         } 
                     }
                    $array = Arr::prepend($array, $arrtmp);
                

                
               
                    $arrtmp = session('filter')[0];
                     if(count($_sizes) > 0){
                        foreach ($arrtmp as $key => $value) {
                            foreach ($_sizes  as $_key => $lin) {
                               if($lin == $value['id']){
                                     $arrtmp[$_key]['checked'] = true;
                                }
                            }
                               
                         } 
                     }
                    $array = Arr::prepend($array, $arrtmp);
                 
               

                        
                session()->forget('filter');
                session(['filter' => $array]);
              //  dd(session('filter'));

         return view('frontend.shop',compact('produtos','subcat'));
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
