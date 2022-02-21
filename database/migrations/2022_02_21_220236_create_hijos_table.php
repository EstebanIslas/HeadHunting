<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHijosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hijos', function (Blueprint $table) {
            $table->id();

            #Propias
            $table->enum('sexo', ['Femenino', 'Masculino']);
            $table->unsignedTinyInteger('edad');
            
            // Foraneas
            $table->unsignedBigInteger('persona_id');
            
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
        Schema::dropIfExists('hijos');
    }
}
