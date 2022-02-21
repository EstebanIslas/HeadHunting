<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetAsignacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_asignacions', function (Blueprint $table) {
            $table->id();

            #Propias
            $table->string('descripcion', 100);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->date('fecha_anticipo')->nullable();
            $table->date('fecha_pago');

            // Foraneas
            $table->unsignedBigInteger('consultor_id');
            $table->unsignedBigInteger('proyecto_id');

            $table->foreign('consultor_id')->references('id')->on('consultors');
            $table->foreign('proyecto_id')->references('id')->on('proyectos');

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
        Schema::dropIfExists('det_asignacions');
    }
}
