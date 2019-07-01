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
}
