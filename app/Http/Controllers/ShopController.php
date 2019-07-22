<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategoria;
use App\Produto;

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

                foreach ($subcat->produtos as $key => $variable) 
                {
                   
                  if(count($variable) > 0){

                       $familia[] = array('titulo' => $variable->familia['titulo'], 'id' => $variable['id']);
                        
                        foreach ($variable->produtocor as $key => $value) {
                                 $cores[] = array('cor' =>  $value->cor['cor'], 'id' => $value['id']);

                        }
                        foreach ($variable->produtosize as $key => $value) {
                                     $tamanhos[] = array('size' =>  $value->size['tamanho'], 'id' => $value['id']);

                        }
                  }     
               
                }

          $produtos = Produto::Where('activo','=','1')->Where('categoria_id','=',$id)->orderBy('ordem','asc')->get();

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

       


       
        return view('frontend.shop',compact('produtos','subcat','familia','cores','tamanhos','subcategoria'));
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
        
        $familia        = $request->familia;
        $colors         = $request->colors;
        $sizes          = $request->sizes;
        $subcategoria   = $request->subcategoria;

        $produtos = Produto::whereIn('familia_id', $familia)->
                    Where('activo','=','1')->Where('subcategoria_id','=',$subcategoria)->orderBy('ordem','asc')->get();

        $subcat = Subcategoria::find($subcategoria);

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
