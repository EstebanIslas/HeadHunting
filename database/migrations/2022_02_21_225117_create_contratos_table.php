<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();

            #Propias
            $table->string('titulo', 30);
            $table->date('firma');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('tarifa_dia', 8, 2);
            $table->string('viaticos', 100)->comment('Descripcion acerca de los viaticos');
            $table->string('gerente', 30)->comment('En algunos contratos aparece el nombre de algún gerente');
            $table->string('vigencia', 10)->comment('Tiempo vigencia del contrato ejm:(2 años)');
            $table->string('tipo_moneda', 20);

            // Foraneas
            $table->unsignedBigInteger('tipo_contrato_id');

            $table->foreign('tipo_contrato_id')->references('id')->on('tipo_contratos');

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
        Schema::dropIfExists('contratos');
    }
}
