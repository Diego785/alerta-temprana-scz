<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComiteAlertaEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comite_alerta_envios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comite_persona_id');
            $table->unsignedBigInteger('alerta_envio_id');
            $table->foreign('comite_persona_id')->references('id')->on('comite_personas');
            $table->foreign('alerta_envio_id')->references('id')->on('alerta_envios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comite_alerta_envios');
    }
}
