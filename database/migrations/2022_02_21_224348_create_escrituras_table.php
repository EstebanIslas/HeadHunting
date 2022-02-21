<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscriturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escrituras', function (Blueprint $table) {
            $table->id();

            #Propias
            $table->string('no_escritura', 10);
            $table->date('fecha');
            $table->string('otorgo', 60);
            $table->string('no_notario', 10);

            // Foraneas
            $table->unsignedBigInteger('inmueble_id');
            
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
        Schema::dropIfExists('escrituras');
    }
}
