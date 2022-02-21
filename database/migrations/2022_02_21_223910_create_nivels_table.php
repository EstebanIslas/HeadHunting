<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivels', function (Blueprint $table) {
            $table->id();

            #Propias
            $table->string('nombre', 35);
            $table->string('descripcion', 100);

            // Foraneas
            $table->unsignedBigInteger('conocimiento_id');
            
            $table->foreign('conocimiento_id')->references('id')->on('conocimientos');

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
        Schema::dropIfExists('nivels');
    }
}
