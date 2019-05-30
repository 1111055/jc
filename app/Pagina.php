<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
      protected $fillable = [
        'nome', 'titulo', 'subtitulo','descricao', 'titulo1', 'descricao1', 'titulo2', 'descricao2', 'link', 'link1', 'pathimg', 'pathimg1'
    ];
    

    public static function getPagina()
    {

        $valty = DB::table('paginas')
            ->get();

        return $valty;
    }
}
