<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sesion', function (Blueprint $table){
            $table->increments('id')->unsigned();
            $table->integer('id_estudiante')->unsigned();
            //$table->foreign('id_estudiante')->references('id')->on('usuarios');
            $table->dateTime('inicio_sesion');
            $table->dateTime('final_sesion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sesion');
    }
}
