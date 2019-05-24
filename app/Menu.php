<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
     protected $fillable = [
        'menu', 'submenu', 'link','descricao', 'ordem', 'activo'
    ];
    

    public static function getMenu()
    {

        $valty = DB::table('menus')
            ->get();

        return $valty;
    }
}
