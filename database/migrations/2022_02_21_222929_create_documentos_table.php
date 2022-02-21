<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();

            #Propias
            $table->string('ruta', 100);
            
            // Foraneas
            $table->unsignedBigInteger('consultor_id');
            $table->unsignedBigInteger('categoria_documento_id');
            
            $table->foreign('consultor_id')->references('id')->on('consultors');
            $table->foreign('categoria_documento_id')->references('id')->on('categoria_documentos');
            
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
        Schema::dropIfExists('documentos');
    }
}
