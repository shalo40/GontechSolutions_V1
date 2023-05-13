<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {

            $table->bigIncrements('id_personals');
            $table->string('nombre');
            $table->string('telefono_1');
            $table->string('telefono_2')->nullable();
            $table->string('correo_personal');
            $table->string('correo_empresa');
            $table->string('rut');
            $table->string('direccion');
            $table->string('especialidad');
            $table->string('tipo');
            $table->timestamp('fecha_creacion')->nullable();
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
        Schema::dropIfExists('personals');
    }
}
