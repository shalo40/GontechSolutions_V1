<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcedimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedimientos', function (Blueprint $table) {

            $table->bigIncrements('id_procedimientos');
            $table->string('codigo_procedimiento');
            $table->string('tipo_procedimiento');
            $table->string('descripcion_procedimiento');
            $table->string('recursos_necesarios_procedimiento');
            $table->float('valor_aproximado_procedimiento');
            $table->string('tiempo_estimado_procedimiento');
            $table->integer('encargado_id')->nullable();
            //clave foranea
            $table->foreign('encargado_id')->references('id_personals')->on('personals');
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
        Schema::dropIfExists('procedimientos');
    }
}
