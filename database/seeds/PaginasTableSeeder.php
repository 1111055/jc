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
    }
}
