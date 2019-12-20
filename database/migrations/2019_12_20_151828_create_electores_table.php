<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('dni');
            $table->string('correo')->unique();
            $table->string('password')->unique();
            $table->bigInteger('voto_id')->unsigned();
            $table->bigInteger('cabina_id')->unsigned();
            $table->bigInteger('candidato_id')->unsigned();
            $table->timestamps();

            $table->foreign('voto_id')->references('id')->on('votos')->onDelete('cascade');
            $table->foreign('cabina_id')->references('id')->on('cabinas')->onDelete('cascade');
            $table->foreign('candidato_id')->references('id')->on('candidatos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('electores');
    }
}
