<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\ProdutoCor;
use App\ProdutoSize;
use App\Categoria;
use App\Subcategoria;
use App\Familia;
use App\Subfamilia;
use App\Color;
use App\Size;
use App\Prazos;
use App\Http\Request\ProdutoRequest;
use Image;
use File;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $produto = Produto::orderBy('ordem','asc')->get();
        return view('backend.Produto.index',compact('produto'));

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

         Produto::create([
            'titulo'          => request()->titulo,
            'ordem'           => request()->ordem
        ]);
       
        return redirect()->route('produto')->with('sucess','Criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

     $prod =  Produto::getProduto($id);
       
     $firstname = explode('/', trim($prod->path));

     if($prod->path != null){
        if (!file_exists(public_path('/img/Produtos/CROP/'.last($firstname)))) {

                 $prod->path = request()->root().'/img/Produtos/CROP/noimage.png';
         }
      }else{
                 $prod->path = request()->root().'/img/Produtos/CROP/noimage.png';
      }

        return view('frontend.produto', compact('prod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $selcat    = Categoria::getSelection();
         $selsubcat = Subcategoria::getSelection();
         $selfam    = Familia::getSelection();
         $selsubfam = Subfamilia::getSelection();
         $selcor    = Color::getSelection();
         $selsize   = Size::getSelection();
         $selprazo  = Prazos::getSelection();


         $produto   = Produto::find($id);

         $tamanhos  = Size::getAllSizes();
         $colors    = Color::getAllColors();

         $prodcor   = ProdutoCor::select('color_id')->Where('produto_id','=',$id)->get();

         $arry = array('0');

         foreach ($prodcor as $key => $value) {
            
             array_push($arry,$value->color_id);

         }


         $prodsize   = ProdutoSize::select('size_id')->Where('produto_id','=',$id)->get();

         $arrys = array('0');

         foreach ($prodsize as $key => $value) {
            
             array_push($arrys,$value->size_id);

         }
 
    

         return view('backend.Produto.edit', compact('produto','selcat','selsubcat','selfam','selsubfam','selcor','selsize','selprazo','tamanhos','colors','arry','arrys'));
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
        $produto = Produto::findOrFail($id);

        $_path = $produto->path;

      //  dd($request->cores);
        ProdutoCor::where('produto_id', $id)->delete();
        
        
        foreach ($request->cores as $key => $value) {
              
                   ProdutoCor::create([
                        'produto_id' => $id,
                        'color_id'   => $value,
                    ]);
        }

        ProdutoSize::where('produto_id', $id)->delete();

        foreach ($request->sizes as $key => $value) {
              
                   ProdutoSize::create([
                        'produto_id' => $id,
                        'size_id'   => $value,
                    ]);
        }


        if($request->hasFile('prodimg')) {

                $photo = $request->file('prodimg');
               
                //Nome Do Ficheiro
                $filenamewithextension = $request->file('prodimg')->getClientOriginalName();
         
                //Nome Sem Extensão 
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
         
                //Extenção do ficheiro
                $extension = $request->file('prodimg')->getClientOriginalExtension();
         
                //Novo nome do ficheiro
                $imagename = "prod_".$request->id.'.'.$photo->getClientOriginalExtension(); 

                $data = getimagesize($photo);
                $width = $data[0];
                $height = $data[1];

                $namepng = "prod_".$request->id.'.png';
                $namejgp = "prod_".$request->id.'.jpg';
                $namegif = "prod_".$request->id.'.gif';
                $nametiff = "prod_".$request->id.'.tiff';

         
                if(file_exists(public_path('/img/Produtos/'.$namepng))){

                      unlink(public_path('/img/Produtos/'.$namepng));

                }
               if(file_exists(public_path('/img/Produtos/'.$namejgp))){

                      unlink(public_path('/img/Produtos/'.$namejgp));

                }
                if(file_exists(public_path('/img/Produtos/'.$namegif))){

                      unlink(public_path('/img/Produtos/'.$namegif));

                }
                if(file_exists(public_path('/img/Produtos/'.$nametiff))){

                      unlink(public_path('/img/Produtos/'.$nametiff));

                }


                //Upload File                     
                $file = $request->file('prodimg')->storeAs('Produtos', $imagename, 'upload');
                
                
               // crop image

                $destinationPath = public_path('/img/Produtos/CROP');
                $thumb_img = Image::make($photo->getRealPath());
            
                if(file_exists(public_path('/img/Produtos/CROP/'.$imagename))){

                      unlink(public_path('/img/Produtos/CROP/'.$imagename));

                }

                $altura =   $height;
                $comprimento = $width;

                $divisaoalt = 210 / $altura; 
                $divisaocom = 270 / $comprimento;

                if($divisaoalt < $divisaocom){
                    $altfinal = $altura * $divisaoalt;
                    $cmpfinal = $comprimento * $divisaoalt;
                }else{
                    $altfinal = $altura * $divisaocom;
                    $cmpfinal = $comprimento * $divisaocom;

                }
                $_path = $request->root().'/img/Produtos/CROP/'.$imagename;
                // Resized image
                $thumb_img->resize($cmpfinal, $altfinal, function ($constraint) {
                    $constraint->aspectRatio();
                });
                // Canvas image
                $canvas = Image::canvas(270, 210);
                $canvas->insert($thumb_img, 'center');
                $canvas->save($destinationPath.'/'.$imagename,50);
                            
       }


        $produto->titulo           = $request->titulo;
        $produto->subtitulo        = $request->subtitulo;
        $produto->descricao        = $request->descricao;
        $produto->categoria_id     = $request->categoria_id;
        $produto->subcategoria_id  = $request->subcategoria_id;
        $produto->familia_id       = $request->familia_id;
        $produto->subfamilia_id    = $request->subfamilia_id;
        $produto->prazos_id        = $request->prazos_id;
        $produto->lote             = $request->lote;
        $produto->obs              = $request->obs;
        $produto->link             = $request->link;
        $produto->path             = $_path;
        $produto->ordem            = $request->ordem;
        $produto->activo           = ($request->activo !== '' && $request->activo !== null) ? 1 : 0;

        $produto->save();

       
         return redirect()->route('produto.edit', compact('produto'))->with('sucess','Guardado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Produto::destroy($id);

         return redirect()->route('produto')->with('sucess','Removido com sucesso.');
    }
}
