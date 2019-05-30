<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('paginas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('titulo')->nullable();
            $table->string('subtitulo')->nullable();
            $table->string('descricao')->nullable();
            $table->string('titulo1')->nullable();
            $table->string('descricao1')->nullable();
            $table->string('titulo2')->nullable();
            $table->string('descricao2')->nullable();
            $table->string('link')->nullable();
            $table->string('link1')->nullable();
            $table->string('pathimg')->nullable();
            $table->string('pathimg1')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paginas');
    }
}
