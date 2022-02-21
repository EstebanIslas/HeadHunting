<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();

            #Propias
            $table->string('nombre', 80);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->unsignedTinyInteger('num_consultores');
            $table->decimal('presupuesto_base', 8, 2);
            $table->string('tipo_moneda', 20);
            $table->enum('status', ['Activo', 'Inactivo']);
            $table->string('descripcion', 200);
            $table->string('version', 20);

            // Foraneas
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('empresa_id');

            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('empresa_id')->references('id')->on('empresas');

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
        Schema::dropIfExists('proyectos');
    }
}
