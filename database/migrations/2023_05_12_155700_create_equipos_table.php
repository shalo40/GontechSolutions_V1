<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {

            $table->bigIncrements('id_equipos');
            $table->string('n_serie_equipo');
            $table->string('accesorios_equipo');
            $table->string('color_equipo');
            $table->string('detalles_equipo');
            $table->string('foto_1')->nullable();
            $table->string('foto_2')->nullable();

            //Claves foraneas

            //marca
            $table->integer('marca_equipo')->nullable();
            $table->foreign('marca_equipo')->references('id_marca_equipos')->on('marca_equipos');
            //modelo
            $table->integer('modelo_equipo')->nullable();
            $table->foreign('modelo_equipo')->references('id_modelo_equipos')->on('modelo_equipos');
            //categoria
            $table->integer('categoria_equipo')->nullable();
            $table->foreign('categoria_equipo')->references('id_cat_equipos')->on('cat_equipos');
            //dueño
            $table->integer('dueño_equipo')->nullable();
            $table->foreign('dueño_equipo')->references('id_clientes')->on('clientes');

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
        Schema::dropIfExists('equipos');
    }
}
