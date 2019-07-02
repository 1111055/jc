<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Produtoimagen;

class ProdutoImagenRequest extends FormRequest
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
   
   public function messages()
    {
        return [
            'required' => "ERRO: Falta preencher :attribute"
        ];
    }
    
    public function persist(){

       $prod = Produtoimagen::orderBy('id','desc')->first();
       
       Produtoimagen::create([
            'produto_id' => request()->produto_id,
            'cont'       => $prod->cont > 0 ? $prod->cont + 1 : 1,
            'path'       => request()->path,
            'ordem'      => request()->ordem,
            'activo'     => request()->activo,
            'destacar'   => request()->destacar
        ]);
    }
}