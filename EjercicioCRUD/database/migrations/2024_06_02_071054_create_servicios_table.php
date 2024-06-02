<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_recepcion');
            $table->foreignId('id_estado')->constrained('estado_servicios');
            $table->text('diagnostico')->nullable();
            $table->text('solucion')->nullable();
            $table->foreignId('id_cliente')->constrained('clientes');
            $table->foreignId('id_equipo')->constrained('equipos');
            $table->foreignId('id_tecnico')->constrained('tecnicos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
