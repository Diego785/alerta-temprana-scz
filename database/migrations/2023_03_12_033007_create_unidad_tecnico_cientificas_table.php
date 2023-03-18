<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadTecnicoCientificasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_tecnico_cientificas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('sigla');
            $table->string('telefono');
            $table->text('description');
            $table->string('url_web');
            $table->string('responsable');
            $table->string('clasificacion');
            $table->string('tipo');
            $table->string('direccion');
            $table->double('puntoX');
            $table->double('puntoY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidad_tecnico_cientificas');
    }
}
