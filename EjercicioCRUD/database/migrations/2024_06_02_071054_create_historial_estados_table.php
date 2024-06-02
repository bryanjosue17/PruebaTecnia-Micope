<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialEstadosTable extends Migration
{
    public function up()
    {
        Schema::create('historial_estados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_servicio');
            $table->unsignedBigInteger('id_estado');
            $table->datetime('fecha');
            $table->timestamps();

            $table->foreign('id_servicio')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('id_estado')->references('id')->on('estado_servicios')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('historial_estados');
    }
}
