<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratoEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_empresas', function (Blueprint $table) {
            $table->id();

            #Foraneas
            $table->unsignedBigInteger('contrato_id');
            $table->unsignedBigInteger('empresa_id');

            $table->foreign('contrato_id')->references('id')->on('contratos');
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
        Schema::dropIfExists('contrato_empresas');
    }
}
