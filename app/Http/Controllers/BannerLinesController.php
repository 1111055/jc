<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BannerLine;
use App\Banner;
use App\Http\Requests\BannerLineRequest;
use Image;
use File;


class BannerLinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(BannerLineRequest $request)
    {

        
        $request->persist();
        return redirect()->route('banner')->with('sucess','Criado com sucesso.');
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

        
          $bannerlines = BannerLine::find($id);
          $banner = Banner::find($bannerlines->idbannner);

          $width = $banner->width;
          $height = $banner->height;

          return view('backend.BannerLine.edit', compact('bannerlines', 'width','height'));
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
         $banner = BannerLine::findOrFail($id);


         $lastid = $id;
         $imagename;
         $_path = $banner->path;

        if($request->hasFile('banerimg')) {
                       
            
                        $photo = $request->file('banerimg');
                       
                      //  dd($photo);

                        //Nome Do Ficheiro
                        $filenamewithextension = $request->file('banerimg')->getClientOriginalName();
                 
                        //Nome Sem Extensão 
                        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                 
                        //Extenção do ficheiro
                        $extension = $request->file('banerimg')->getClientOriginalExtension();
                 
                        //Novo nome do ficheiro
                        $imagename = "banner_".$request->idbanner.'_'.$lastid.'.'.$photo->getClientOriginalExtension(); 

                        $data = getimagesize($photo);
                        $width = $data[0];
                        $height = $data[1];

                        $namepng = "banner_".$request->idbanner.'_'.$lastid.'.png';
                        $namejgp = "banner_".$request->idbanner.'_'.$lastid.'.jpg';
                        $namegif = "banner_".$request->idbanner.'_'.$lastid.'.gif';
                        $nametiff = "banner_".$request->idbanner.'_'.$lastid.'.tiff';

                 
                        if(file_exists(public_path('/Banners/'.$namepng))){

                              unlink(public_path('/Banners/'.$namepng));

                        }
                       if(file_exists(public_path('/Banners/'.$namejgp))){

                              unlink(public_path('/Banners/'.$namejgp));

                        }
                        if(file_exists(public_path('/Banners/'.$namegif))){

                              unlink(public_path('/Banners/'.$namegif));

                        }
                        if(file_exists(public_path('/Banners/'.$nametiff))){

                              unlink(public_path('/Banners/'.$nametiff));

                        }

    
                        //Upload File                     
                        $file = $request->file('banerimg')->storeAs('Banners', $imagename, 'upload');
                        
                        
                       // crop image

                        $destinationPath = public_path('/Banners/CROP');
                        $thumb_img = Image::make($photo->getRealPath());
                    
                        if(file_exists(public_path('/Banners/CROP/'.$imagename))){

                              unlink(public_path('/Banners/CROP/'.$imagename));

                        }

                        $altura =   $height;
                        $comprimento = $width;

                        $divisaoalt = 560 / $altura; 
                        $divisaocom = 1920 / $comprimento;

                        if($divisaoalt < $divisaocom){
                            $altfinal = $altura * $divisaoalt;
                            $cmpfinal = $comprimento * $divisaoalt;
                        }else{
                            $altfinal = $altura * $divisaocom;
                            $cmpfinal = $comprimento * $divisaocom;

                        }
                        $_path = $request->root().'/Banners/CROP/'.$imagename;
                        // Resized image
                        $thumb_img->resize($cmpfinal, $altfinal, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                        // Canvas image
                        $canvas = Image::canvas(1920, 560);
                        $canvas->insert($thumb_img, 'center');
                        $canvas->save($destinationPath.'/'.$imagename,50);
                                    
      }


        //dd($request->all());
        $banner->titulo      = $request->titulo;
        $banner->subtitulo   = $request->subtitulo;
        $banner->descricao   = $request->descricao;
        $banner->link        = $request->link;
        $banner->ordem       = $request->ordem;
        $banner->path        = $_path;
        $banner->activo      = $request->activo !== '' ? 1 : 0;

        $banner->save();

       
         return redirect()->route('bannerlines.edit', compact('banner'))->with('sucess','Guardado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BannerLine::destroy($id);

         return redirect()->route('bannerlines')->with('sucess','Removido com sucesso.');
    }
}
