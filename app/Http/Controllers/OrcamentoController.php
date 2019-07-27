<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orcamento;
use App\Orcamentoline;
use App\Http\Requests\OrcamentoRequest;
use Illuminate\Support\Facades\Storage;
use File;
use Carbon\Carbon;

class OrcamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $orcamento =  Orcamento::orderBy('created_at','desc')->get();

        return view('backend.Orcamento.index', compact('orcamento'));
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
    public function store(OrcamentoRequest $request)
    {
        $imagename = "";


            $uploadPath = public_path('orcamento');
            $thumbPath = public_path(env('UPLOAD_PATH').'/thumb');
            if (! file_exists($uploadPath)) {
                mkdir($uploadPath, 0775);
                mkdir($thumbPath, 0775);
            }


          if($request->hasFile('fileToUpload')) {


                    $photo = $request->file('fileToUpload');
                   
                    $filenamewithextension = $photo->getClientOriginalName();
             
                    $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
             
                    $extension = $photo->getClientOriginalExtension();
             
                    $imagename = Carbon::now().'.'.$extension ; 

                   // $photo->move(public_path("\orcamento"), $imagename);   

                 // $photo->storeAs(null, $imagename, 'upload');
                    //Storage::disk('orcamento')->put("orcamento", $photo);
                  //  $path = $photo->store('orcamento');
                    $filename = time() . '-' . $photo->getClientOriginalName();
                    $photo->move($uploadPath, $filename);
  
          }


                
       
        $data =   $request->persist($filename);
      

        $produto = $request->prod;
        $cor     = $request->cor;
        $size    = $request->size;
        $qtd     = $request->quantidade;
        $qtd     = $request->quantidade;

        if(count($produto) > 0){

            foreach ($produto as $key => $value) {
              Orcamentoline::create([
                'produto_id'     => $value,
                'color_id'       => $cor[$key],
                'size_id'        => $size[$key],
                'quantidade'     => $qtd[$key],
                'orcamento_id'   => $data->id 
              ]);
            }

        }


          return response()
            ->json(['done' => '1']);

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      

       $orcamento =  Orcamento::find($id);


         foreach ($orcamento->getOrcamentolines  as $key => $valuetmp) {

                  if($valuetmp->produto->path != null){
                     $firstname = explode('/', trim($valuetmp->produto->path));
                    if (!file_exists(public_path('/img/Produtos/CROP/'.last($firstname)))) {

                             $valuetmp->produto->path = request()->root().'/img/Produtos/CROP/noimage.png';
                     }
                  }else{
                             $valuetmp->produto->path = request()->root().'/img/Produtos/CROP/noimage.png';
                  }
              
        }
 
        return view('backend.Orcamento.show', compact('orcamento'));
    }

    /**
     * Show the form for e diting the specified resource.
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
