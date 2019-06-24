<?php

use Illuminate\Database\Seeder;

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
            'titulo' => 'titulo home'
        ]);

        DB::table('paginas')->insert([
            'nome'   => 'About',
            'titulo' => 'titulo about'
        ]);

        DB::table('paginas')->insert([
            'nome'   => 'Contactos',
            'titulo' => 'titulo contactos'
        ]);


        DB::table('paginas')->insert([
            'nome'   => 'Termos e Condições',
            'titulo' => 'titulo Termos e Condições'
        ]);

        DB::table('paginas')->insert([
            'nome'   => 'Politica de Privacidade',
            'titulo' => 'titulo Politica de Privacidade'
        ]);

        DB::table('paginas')->insert([
            'nome'   => 'Perguntas Ferquentes',
            'titulo' => ' Titulo Perguntas Ferquentes'
        ]);
    }
}
