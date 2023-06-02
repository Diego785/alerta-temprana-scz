<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipioAlertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipio_alertas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('municipio_id');
            $table->unsignedBigInteger('alerta_envio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('no action')->onUpdate('no action');
            $table->foreign('alerta_envio_id')->references('id')->on('alerta_envios')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipio_alertas');
    }
}
