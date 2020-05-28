<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartaos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('titulo')->nullable();
            $table->text('texto')->nullable();
            $table->integer('icone')->nullable();
            $table->string('caminhoImagem')->nullable();
            $table->date('data')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cartaos');
    }
}
