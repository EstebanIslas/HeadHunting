<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultors', function (Blueprint $table) {
            $table->id();

            #Propias
            $table->enum('tipo_persona', ['Fisica', 'Moral']);
            $table->string('pasaporte', 100);
            $table->string('licencia', 100);
            $table->string('rfc', 100);
            $table->string('curp', 100);
            $table->unsignedDecimal('tarifa_dia', 8, 2);
            
            // Foraneas
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('tipo_visa_id');
            
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('tipo_visa_id')->references('id')->on('tipo_visas');
            
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
        Schema::dropIfExists('consultors');
    }
}
