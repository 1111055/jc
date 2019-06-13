<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Prazos;
class Prazos extends Model
{
     protected $fillable = [
        'titulo','descricao', 'dias', 'ordem', 'activo'
    ];
    

    public static function getPrazos()
    {

        $valty = Prazos::orderBy('ordem','asc')->get();
         

        return $valty;
    }
}
