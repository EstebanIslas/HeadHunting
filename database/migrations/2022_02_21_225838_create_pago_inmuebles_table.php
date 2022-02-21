<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_inmuebles', function (Blueprint $table) {
            $table->id();

            #Propias
            $table->string('nombre', 30);
            $table->string('descripcion', 100);
            $table->double('costo', 8, 2);
            $table->string('status', 20);
            $table->date('fecha');

            // Foraneas
            $table->unsignedBigInteger('servicio_inmueble_id');
            $table->unsignedBigInteger('det_asignacion_id');

            $table->foreign('servicio_inmueble_id')->references('id')->on('servicio_inmuebles');
            $table->foreign('det_asignacion_id')->references('id')->on('det_asignacions');


            // Predeterminadas
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
        Schema::dropIfExists('pago_inmuebles');
    }
}
