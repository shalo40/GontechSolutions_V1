<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {

            $table->bigIncrements('id-tickets');
            $table->dateTime('fecha_hora_asignacion')->nullable();

            //CLIENTE
            $table->unsignedInteger('cliente_id');
            //TICKET
            $table->unsignedInteger('tipo_servicio');
            $table->unsignedInteger('area_del_requerimiento')->nullable();
            $table->string('descripcion_problema');
            //DETALLE TICKET
            $table->unsignedInteger('responsable_id')->nullable();
            $table->dateTime('fecha_hora_limite_respuesta')->nullable();
            $table->unsignedInteger('estado_ticket');
            $table->timestamps();

            //CLAVES FORANEAS
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('responsable_id')->references('id_personals')->on('personals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
