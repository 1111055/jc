<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('produtos')->insert([
            'titulo'   => 'T-SHIRT ADULTO BRANCA "KEYA" MC150',
            'subtitulo' => ' ',
            'cod_art'   => '5856',
            'ordem' => '001',
            'path' => 'http://localhost/public/img/Produtos/CROP/prod_1.jpg',
            'pathbig' => 'http://localhost/public/img/Produtos/CROP/prod_big1.jpg',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('produtos')->insert([
            'titulo'   => 'CASACO TECNICO KLUSTEN',
            'subtitulo' => ' ',
            'cod_art'   => '4724',
            'ordem' => '002',
            'path' => 'http://localhost/public/img/Produtos/CROP/prod_2.jpg',
            'pathbig' => 'http://localhost/public/img/Produtos/CROP/prod_big2.jpg',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('produtos')->insert([
            'titulo'   => 'POLO ADULTO CÔR "KEYA" MPS180',
            'subtitulo' => ' ',
            'cod_art'   => '5863',
            'ordem' => '003',
            'path' => 'http://localhost/public/img/Produtos/CROP/prod_3.jpg',
            'pathbig' => 'http://localhost/public/img/Produtos/CROP/prod_big3.jpg',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('produtos')->insert([
            'titulo'   => 'SACO JAZZIN',
            'subtitulo' => ' ',
            'cod_art'   => '5726',
            'ordem' => '004',
            'path' => 'http://localhost/public/img/Produtos/CROP/prod_4.jpg',
            'pathbig' => 'http://localhost/public/img/Produtos/CROP/prod_big4.jpg',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('produtos')->insert([
            'titulo'   => 'SACO JAZZIN',
            'subtitulo' => ' ',
            'cod_art'   => '4622',
            'ordem' => '005',
            'path' => 'http://localhost/public/img/Produtos/CROP/prod_5.jpg',
            'pathbig' => 'http://localhost/public/img/Produtos/CROP/prod_big5.jpg',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('produtos')->insert([
            'titulo'   => 'T-SHIRT MULHER CÔR "KEYA" WCS180',
            'subtitulo' => ' ',
            'cod_art'   => '5870',
            'ordem' => '006',
            'path' => 'http://localhost/public/img/Produtos/CROP/prod_6.jpg',
            'pathbig' => 'http://localhost/public/img/Produtos/CROP/prod_big6.jpg',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

    }
}
