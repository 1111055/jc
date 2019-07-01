<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
     protected $fillable = [
        'titulo', 'subtitulo','idcategoria','ordem','activo'
    ];
    

    public static function getSubCategorias()
    {

        $valty = Subategoria::where('activo','=','1')->orderBy('ordem','asc')->get();

        return $valty;
    }

    public function categoria(){

    	return $this->belongsTo('App\Categoria');
    }
}
