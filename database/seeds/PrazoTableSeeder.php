<?php

use Illuminate\Database\Seeder;

class PrazoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('prazos')->insert([
            'titulo'    => 'Lento',
            'descricao' => 'Entrega em 10 dias',
            'dias'      => 10,
            'ordem'     => '001'
        ]);

        DB::table('prazos')->insert([
            'titulo'    => 'Meio rapido',
            'descricao' => 'Entrega em 5 dias',
            'dias'      => 5,
            'ordem'     => '002'
        ]);

        DB::table('prazos')->insert([
            'titulo'    => 'Rapido',
            'descricao' => 'Entrega em 2 dias',
            'dias'      => 2,
            'ordem'     => '003'
        ]);
    }
}
