<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->text('description');
            $table->string('tipo')->nullable();
            $table->double('geoX')->nullable();
            $table->double('geoY')->nullable();
            $table->string('url_mapa')->nullable();
            $table->string('estado')->default('Abierta');
            $table->unsignedBigInteger('evento_id');
            $table->unsignedBigInteger('unidad_id');
            $table->foreign('evento_id')->references('id')->on('eventos');
            $table->foreign('unidad_id')->references('id')->on('unidad_tecnico_cientificas');
            // $table->string('logoPush')->nullable();
            // $table->text('infoPush')->nullable();

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
        Schema::dropIfExists('alertas');
    }
}
