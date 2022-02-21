<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscolaridadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolaridads', function (Blueprint $table) {
            $table->id();

            #Propias
            $table->string('cedula', 20);
            $table->date('titulo_registrado');
            $table->date('fecha_ingreso');
            $table->date('fecha_termino');
            
            // Foraneas
            $table->unsignedBigInteger('id_institucion');
            $table->unsignedBigInteger('id_especialidad');
            $table->unsignedBigInteger('id_consultor');
            
            $table->foreign('id_institucion')->references('id')->on('institucions');
            $table->foreign('id_especialidad')->references('id')->on('especialidads');
            $table->foreign('id_consultor')->references('id')->on('consultors');
            
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
        Schema::dropIfExists('escolaridads');
    }
}
