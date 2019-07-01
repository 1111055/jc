<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class PaginasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paginas')->insert([
            'nome'   => 'Home',
            'titulo' => 'titulo home',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('paginas')->insert([
            'nome'   => 'About',
            'titulo' => 'titulo about',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('paginas')->insert([
            'nome'   => 'Contactos',
            'titulo' => 'titulo contactos',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);


        DB::table('paginas')->insert([
            'nome'   => 'Termos e Condições',
            'titulo' => 'titulo Termos e Condições',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('paginas')->insert([
            'nome'   => 'Politica de Privacidade',
            'titulo' => 'titulo Politica de Privacidade',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('paginas')->insert([
            'nome'   => 'Perguntas Ferquentes',
            'titulo' => ' Titulo Perguntas Ferquentes',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
