<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Http\Requests\SettingRequest;
use Image;
use File;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $setting = Setting::first();
                


        return view('backend.Setting.index', compact('setting'));
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
    public function update(SettingRequest $request, $id)
    {
        $setting = Setting::findOrFail($id);



        $input = $request->all();

        $setting->fill($input)->save();



        if($request->hasFile('profile_image')) {
			
			
				    	$photo = $request->file('profile_image');
						
                        //Nome Do Ficheiro
                        $filenamewithextension = $request->file('profile_image')->getClientOriginalName();
                 
                        //Nome Sem Extensão 
                        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                 
                        //Extenção do ficheiro
                        $extension = $request->file('profile_image')->getClientOriginalExtension();
                 
                        //Novo nome do ficheiro
						$imagename = "logotipo".'.'.$photo->getClientOriginalExtension(); 
                 
					    if(file_exists(public_path('/logotipo/IMG/logotipo.png'))){

							  unlink(public_path('/logotipo/IMG/logotipo.png'));

						}
	
                        //Upload File					  
					    $file = $request->file('profile_image')->storeAs('IMG', $imagename, 'upload');
                        
                        
                       // crop image

						$destinationPath = public_path('/logotipo/CROP');
						$thumb_img = Image::make($photo->getRealPath());
					
					    if(file_exists(public_path('/logotipo/CROP/logotipo.png'))){

							  unlink(public_path('/logotipo/CROP/logotipo.png'));

						}
						// Resized image
						$thumb_img->resize(90, 95, function ($constraint) {
							$constraint->aspectRatio();
						});
						// Canvas image
						$canvas = Image::canvas(110, 110);
						$canvas->insert($thumb_img, 'center');
						$canvas->save($destinationPath.'/'.$imagename,50);
										

           return redirect()->route('setting')->with(['success' => "Guardado com sucesso."]);
      }   else{
        return redirect()->route('setting')->with(['success' => "Guardado com sucesso."]);
      }
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
