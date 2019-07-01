<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
     protected $fillable = [
        'titulo', 'subtitulo', 'ordem','activo'
    ];
    

    public static function getFamilias()
    {

        $valty = Familia::where('activo','=','1')->orderBy('ordem','asc')->get();

        return $valty;
    }

        public function subfamilia(){

    	return $this->hasMany('App\Subfamilia');
    }
}
