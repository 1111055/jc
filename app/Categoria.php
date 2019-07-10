<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
     protected $fillable = [
        'titulo', 'subtitulo', 'ordem','activo'
    ];
    

    public static function getCategorias()
    {

        $valty = Categoria::where('activo','=','1')->orderBy('ordem','asc')->get();

        return $valty;
    }
    public function subcategoria(){

    	 return $this->hasMany('App\Subcategoria');
    }

    public static function getSelection(){

       $categoria = Categoria::
                 where('titulo', '!=', '')
                 ->orderBy('ordem','asc')->get();


       $selcat = $categoria->pluck('titulo','id');

       
       $selcat->prepend('-- Escolha uma opção -- ',0);

        return $selcat;
    }
}
