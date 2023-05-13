<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeloEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo_equipos', function (Blueprint $table) {
            
            $table->bigIncrements('id_modelo_equipos');
            $table->string('nombre_modelo_equipo');
            $table->integer('marca_equipo')->nullable();
            //clave foranea
            $table->foreign('marca_equipo')->references('nombre_marca_equipo')->on('marca_equipos');
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
        Schema::dropIfExists('modelo_equipos');
    }
}
