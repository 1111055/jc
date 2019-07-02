<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtoimagen extends Model
{
    protected $fillable = [
        'produto_id', 'cont', 'path', 'ordem', 'activo', 'destacar', 'color_id', 'size_id'
    ];
    

    public static function getBannerHome()
    {

        $valty = Produtoimagen::where('id','=','1')->orderBy('ordem','asc')->get();

        return $valty;
    }
}
