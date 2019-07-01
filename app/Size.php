<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = [
        'titulo', 'subtitulo', 'tamanho','ordem','activo'
    ];
    

    public static function getSizes()
    {

        $valty = Color::where('activo','=','1')->orderBy('ordem','asc')->get();

        return $valty;
    }
}
