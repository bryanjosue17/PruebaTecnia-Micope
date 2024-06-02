<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleReparacionesTable extends Migration
{
    public function up()
    {
        Schema::create('detalle_reparaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_servicio');
            $table->unsignedBigInteger('id_pieza');
            $table->text('descripcion');
            $table->integer('cantidad')->default(1);
            $table->decimal('costo', 10, 2)->default(0.00);
            $table->timestamps();

            $table->foreign('id_servicio')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('id_pieza')->references('id')->on('piezas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalle_reparaciones');
    }
}
