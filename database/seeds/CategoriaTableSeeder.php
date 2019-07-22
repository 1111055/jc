<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'titulo'   => 'Roupa',
            'subtitulo' => 'Camisolas',
            'ordem' => '001',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'titulo'   => 'Escritorio',
            'subtitulo' => ' Material de Escritorio',
            'ordem' => '002',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'titulo'   => 'Acessórios',
            'subtitulo' => 'Acessórios Diversos',
            'ordem' => '003',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'titulo'   => 'Teste 1',
            'subtitulo' => 'Teste 1',
            'ordem' => '004',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'titulo'   => 'Teste 2',
            'subtitulo' => 'Teste 2',
            'ordem' => '005',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
