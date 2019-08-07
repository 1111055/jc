<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class SubcategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('subcategorias')->insert([
            'titulo'   => 'T Shirt',
            'subtitulo' => 'Polos de Mulher',
            'categoria_id' => 1,
            'ordem' => '001',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('subcategorias')->insert([
            'titulo'   => 'Canetas',
            'subtitulo' => 'Canetas',
            'categoria_id' => 2,
            'ordem' => '002',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('subcategorias')->insert([
            'titulo'   => 'Pulseiras',
            'subtitulo' => 'Pulseiras',
            'categoria_id' => 3,
            'ordem' => '003',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
