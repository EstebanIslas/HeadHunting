<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetConocimientoConsultorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_conocimiento_consultors', function (Blueprint $table) {
            $table->id();

            #Foraneas
            $table->unsignedBigInteger('consultor_id');
            $table->unsignedBigInteger('nivel_id');

            $table->foreign('consultor_id')->references('id')->on('consultors');
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
        Schema::dropIfExists('det_conocimiento_consultors');
    }
}
