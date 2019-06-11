<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagina;
use App\Desc;
use App\Http\Requests\PaginaRequest;

class PaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $pagina = Pagina::
                 orderBy('nome','asc')->get();


        return view('backend.pagina.index', compact('pagina'));
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

         dd($desc);

        return view('backend.Pagina.edit', compact('pagina','desc'));
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

        $input = $request->all();

        $pagina->fill($input)->save();

       
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
