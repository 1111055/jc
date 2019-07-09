<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ProdutoRequest extends FormRequest
{
     /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'titulo'  => 'required'
        ];

    }
   public function messages()
    {
        return [
            'required' => "ERRO: Falta preencher :attribute"
        ];
    }
    
    public function persist(){
   
       Produto::create([
            'sku'             => request()->sku,
            'titulo'          => request()->titulo,
            'subtitulo'       => request()->descricao,
            'descricao'       => request()->descricao,
            'obs'             => request()->obs,
            'categoria_id'    => request()->categoria_id,
            'subcategoria_id' => request()->subcategoria_id,
            'familia_id'      => request()->familia_id,
            'subfamilia_id'   => request()->subfamilia_id,
            'prazos_id'       => request()->prazos_id,
            'lote'            => request()->lote,
            'link'            => request()->link,
            'path'            => request()->link,
            'ordem'           => request()->ordem,
            'activo'          => request()->activo
        ]);
    }
               
}
