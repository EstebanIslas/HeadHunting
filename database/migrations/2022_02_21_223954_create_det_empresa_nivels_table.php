<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetEmpresaNivelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_empresa_nivels', function (Blueprint $table) {
            $table->id();

            #Propias
            $table->enum('status', ['Activo', 'Inactivo']);
            
            // Foraneas
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('nivel_id');

            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->foreign('nivel_id')->references('id')->on('nivels');

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
        Schema::dropIfExists('det_empresa_nivels');
    }
}
