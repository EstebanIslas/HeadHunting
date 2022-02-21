<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomicilioEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilio_empresas', function (Blueprint $table) {
            $table->id();

            #Foraneas
            $table->unsignedBigInteger('domicilio_id');
            $table->unsignedBigInteger('empresa_id');

            $table->foreign('domicilio_id')->references('id')->on('domicilios');
            $table->foreign('empresa_id')->references('id')->on('empresas');

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
        Schema::dropIfExists('domicilio_empresas');
    }
}
