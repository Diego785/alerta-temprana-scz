<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlertaEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerta_envios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alerta_id');
            $table->unsignedBigInteger('estado_id');
            $table->date('fecha');
            $table->time('hora');
            $table->double('puntoX');
            $table->double('puntoY');
            $table->string('url_mapa');
            $table->string('description');
            $table->string('img_cabecera');
            $table->string('img_alerta');
            $table->string('url_boletin');
            $table->string('recomendacion');
            $table->foreign('alerta_id')->references('id')->on('alertas');
            $table->foreign('estado_id')->references('id')->on('estados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alerta_envios');
    }
}
