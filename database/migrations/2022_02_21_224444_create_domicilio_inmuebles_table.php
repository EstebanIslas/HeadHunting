<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomicilioInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilio_inmuebles', function (Blueprint $table) {
            $table->id();

            #Foraneas
            $table->unsignedBigInteger('domicilio_id');
            $table->unsignedBigInteger('inmueble_id');

            $table->foreign('domicilio_id')->references('id')->on('domicilios');
            $table->foreign('inmueble_id')->references('id')->on('inmuebles');

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
        Schema::dropIfExists('domicilio_inmuebles');
    }
}
