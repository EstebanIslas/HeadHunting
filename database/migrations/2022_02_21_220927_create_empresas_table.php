<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();

            #Propias
            $table->string('nombre', 50);
            $table->string('telefono', 20);
            $table->string('resumen', 240);
            $table->string('image', 100);
            $table->string('tiempo', 100);
            $table->string('version_sap', 100);
            $table->string('hardware', 100);

            // Foraneas
            $table->unsignedBigInteger('giro_id');
            $table->unsignedBigInteger('persona_id');
            
            $table->foreign('giro_id')->references('id')->on('giros');
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
        Schema::dropIfExists('empresas');
    }
}
