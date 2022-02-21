<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratoInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_inmuebles', function (Blueprint $table) {
            $table->id();

            #Foraneas
            $table->unsignedBigInteger('inmueble_id');
            $table->unsignedBigInteger('contrato_id');

            $table->foreign('inmueble_id')->references('id')->on('inmuebles');
            $table->foreign('contrato_id')->references('id')->on('contratos');

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
        Schema::dropIfExists('contrato_inmuebles');
    }
}
