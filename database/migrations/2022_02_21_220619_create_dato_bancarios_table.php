<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatoBancariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dato_bancarios', function (Blueprint $table) {
            $table->id();
            
            #Propias
            $table->string('sucursal', 80);
            $table->string('cuenta_clabe', 20);
            
            // Foraneas
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('banco_id');
            
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('banco_id')->references('id')->on('bancos');
            
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
        Schema::dropIfExists('dato_bancarios');
    }
}
