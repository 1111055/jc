<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subfamilia extends Model
{
    protected $fillable = [
        'titulo', 'subtitulo','idfamilia', 'ordem','activo'
    ];
    

    public static function getSubFamilias()
    {

        $valty = SubFamilia::where('activo','=','1')->orderBy('ordem','asc')->get();

        return $valty;
    }

    public function familia(){

    	return $this->belongsTo('App\familia');
    }
}
