<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->id();

            #Propias
            $table->string('calle', 100);
            $table->integer('numero');
            $table->string('colonia', 100);
            $table->string('municipio', 100);
            $table->string('ciudad', 100);
            $table->string('cp', 11)->nullable()->comment('Codigo Postal');
            $table->string('estado', 100);
            $table->string('pais', 100);
            $table->string('latitude', 20);
            $table->string('longitude', 20);
            
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
        Schema::dropIfExists('domicilios');
    }
}
