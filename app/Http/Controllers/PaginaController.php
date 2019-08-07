<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagina;
use App\Desc;
use App\Banner;
use App\Http\Requests\PaginaRequest;
use Image;
use File;

class PaginaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $pagina = Pagina::
                 orderBy('nome','asc')->get();


        return view('backend.Pagina.index', compact('pagina'));
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
    public function store(PaginaRequest $request)
    {
          $request->persist();

        return redirect()->route('pagina')->with('sucess','Criado com sucesso.');
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
       $pagina = Pagina::find($id);

       $desc =  Desc::where('page_id','=',$id)->get();

       $bn = Banner::
         where('activo', '=', '1')
         ->orderBy('ordem','asc')->get();


       $banners = $bn->pluck('titulo','id');

       
       $banners->prepend('-- Escolha um Submenu -- ',0);

        return view('backend.Pagina.edit', compact('pagina','desc','banners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaginaRequest $request, $id)
    {
        $pagina = Pagina::findOrFail($id);


           if($request->hasFile('banerimg')) {
                      
            
                        $photo = $request->file('banerimg');
                       
                        $filenamewithextension = $request->file('banerimg')->getClientOriginalName();
                 
                        //Nome Sem Extensão 
                        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                 
                        //Extenção do ficheiro
                        $extension = $request->file('banerimg')->getClientOriginalExtension();
                 
                        //Novo nome do ficheiro
                        $imagename = "banner_home.".$photo->getClientOriginalExtension(); 

                        $data = getimagesize($photo);
                        $width = $data[0];
                        $height = $data[1];

                        $namepng = "banner_home.png";
                        $namejgp = "banner_home.jpg";
                        $namegif = "banner_home.gif";
                        $nametiff = "banner_home.tiff";

                 
                        if(file_exists(public_path('/img/'.$namepng))){

                              unlink(public_path('/img/'.$namepng));

                        }
                       if(file_exists(public_path('/img/'.$namejgp))){

                              unlink(public_path('/img/'.$namejgp));

                        }
                        if(file_exists(public_path('/img/'.$namegif))){

                              unlink(public_path('/img/'.$namegif));

                        }
                        if(file_exists(public_path('/img/'.$nametiff))){

                              unlink(public_path('/img/'.$nametiff));

                        }

    
                        //Upload File                     
                        $file = $request->file('banerimg')->storeAs('img', $imagename, 'upload');
                        
                        
                       // crop image

                        $destinationPath = public_path('/img/CROP');
                        $thumb_img = Image::make($photo->getRealPath());
                    
                        if(file_exists(public_path('/img/CROP/'.$imagename))){

                              unlink(public_path('/img/CROP/'.$imagename));

                        }

                        $altura =   $height;
                        $comprimento = $width;

                        $divisaoalt = 240 / $altura; 
                        $divisaocom = 870 / $comprimento;

                        if($divisaoalt < $divisaocom){
                            $altfinal = $altura * $divisaoalt;
                            $cmpfinal = $comprimento * $divisaoalt;
                        }else{
                            $altfinal = $altura * $divisaocom;
                            $cmpfinal = $comprimento * $divisaocom;

                        }
                        $_path = $request->root().'/img/CROP/'.$imagename;
                        // Resized image
                        $thumb_img->resize($cmpfinal, $altfinal, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                        // Canvas image
                        $canvas = Image::canvas(870, 240);
                        $canvas->insert($thumb_img, 'center');
                        $canvas->save($destinationPath.'/'.$imagename,50);
                                    
           }



        $input = $request->all();


        $pagina->nome      = $request->nome;
        $pagina->titulo      = $request->titulo;
        $pagina->subtitulo   = $request->subtitulo;
        $pagina->descricao   = $request->descricao;
        $pagina->link        = $request->link;
        $pagina->pathimg     = $_path;

        $pagina->save();

       
         return redirect()->route('pagina.edit', compact('pagina'))->with('sucess','Guardado com sucesso.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pagina::destroy($id);

         return redirect()->route('pagina')->with('sucess','Removido com sucesso.');
    }
}
