<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->string('numero_serie')->nullable();
            $table->text('descripcion_problema')->nullable();
            $table->foreignId('id_marca')->constrained('marcas');
            $table->foreignId('id_tipo_equipo')->constrained('tipos_equipos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
