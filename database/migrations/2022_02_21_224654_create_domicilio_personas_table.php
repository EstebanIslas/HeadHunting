<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomicilioPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilio_personas', function (Blueprint $table) {
            $table->id();

            #Foraneas
            $table->unsignedBigInteger('domicilio_id');
            $table->unsignedBigInteger('persona_id');

            $table->foreign('domicilio_id')->references('id')->on('domicilios');
            $table->foreign('persona_id')->references('id')->on('personas');

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
        Schema::dropIfExists('domicilio_personas');
    }
}
