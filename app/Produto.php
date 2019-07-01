<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
       'sku', 'titulo', 'subtitulo', 'descricao', 'obs', 'categoria_id', 'subcategoria_id','familia_id','subfamilia_id',
       'prazos_id', 'color_id', 'size_id', 'quantidade', 'lote', 'link', 'path', 'ordem', 'activo'
    ];
    

    public static function getProdutos()
    {

        $valty = Produto::where('activo','=','1')->orderBy('ordem','asc')->get();

        return $valty;
    }

    public function cor(){

    	return $this->belongsTo('App\Color');
    }
    public function size(){

    	return $this->belongsTo('App\Size');
    }
    public function prazos(){

    	return $this->belongsTo('App\Prazos');
    }
    public function categoria(){

        return $this->belongsTo('App\Categoria');
    }
    public function subcategoria(){

       return $this->belongsTo('App\Subcategoria');
    }
    public function familia(){

        return $this->belongsTo('App\Familia');
    }
    public function subfamilia(){

        return $this->belongsTo('App\Subfamilia');
    }
}
