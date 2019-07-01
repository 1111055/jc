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
            'titulo'   => 'Boné',
            'subtitulo' => 'Boné menino ',
            'ordem' => '001',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('produtos')->insert([
            'titulo'   => 'Caneta',
            'subtitulo' => 'Caneta top ',
            'ordem' => '002',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('produtos')->insert([
            'titulo'   => 'T Shirt',
            'subtitulo' => 'T Shirt menino ',
            'ordem' => '003',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
