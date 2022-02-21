<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_inmuebles', function (Blueprint $table) {
            $table->id();

            #Propias
            $table->double('costo_mes', 8, 2);
            $table->double('costo_anio', 8, 2);
            $table->string('descripcion', 100);
            $table->enum('costo_variable', ['Variable', 'Fijo']);

            // Foraneas
            $table->unsignedBigInteger('inmueble_id');
            $table->unsignedBigInteger('servicio_id');

            $table->foreign('inmueble_id')->references('id')->on('inmuebles');
            $table->foreign('servicio_id')->references('id')->on('servicios');

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
        Schema::dropIfExists('servicio_inmuebles');
    }
}
