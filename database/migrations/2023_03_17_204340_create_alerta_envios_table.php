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
            $table->unsignedBigInteger('unidad_id')->nullable();
            $table->date('fecha');
            $table->time('hora');
            $table->text('description');
            $table->text('recomendacion')->nullable();
            $table->string('fuente')->nullable();
            $table->double('puntoX')->nullable();
            $table->double('puntoY')->nullable();
            $table->string('url_mapa')->nullable();
            $table->string('video')->nullable();
            $table->string('img_cabecera')->nullable();
            $table->string('img_alerta')->nullable();
            $table->string('url_boletin')->nullable();
            $table->foreign('alerta_id')->references('id')->on('alertas');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('unidad_id')->references('id')->on('unidad_tecnico_cientificas')->onUpdate('no action')->onDelete('no action');
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
