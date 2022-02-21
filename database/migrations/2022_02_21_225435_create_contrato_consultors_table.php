<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratoConsultorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_consultors', function (Blueprint $table) {
            $table->id();

            #Foraneas
            $table->unsignedBigInteger('contrato_id');
            $table->unsignedBigInteger('consultor_id');

            $table->foreign('contrato_id')->references('id')->on('contratos');
            $table->foreign('consultor_id')->references('id')->on('consultors');

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
        Schema::dropIfExists('contrato_consultors');
    }
}
