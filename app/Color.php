<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
     protected $fillable = [
        'titulo', 'subtitulo', 'cor','ordem','activo'
    ];
    

    public static function getColors()
    {

        $valty = Color::where('activo','=','1')->orderBy('ordem','asc')->get();

        return $valty;
    }

    public static function getSelection(){

       $item = Color::
                 where('titulo', '!=', '')
                 ->orderBy('ordem','asc')->get();


       $itemtmp = $item->pluck('titulo','id');

       
       $itemtmp->prepend('-- Escolha uma Categoria -- ',0);

       return $itemtmp;
    }
}
