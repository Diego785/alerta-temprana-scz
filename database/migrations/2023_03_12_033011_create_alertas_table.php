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
            $table->text('description');
            $table->date('fecha');
            $table->time('hora');
            $table->double('geoX');
            $table->double('geoY');
            $table->unsignedBigInteger('municipio_id');
            $table->unsignedBigInteger('unidad_id');

            $table->foreign('municipio_id')->references('id')->on('municipios')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('unidad_id')->references('id')->on('unidads')->onUpdate('cascade')->onDelete('cascade');


            $table->string('logoPush');
            $table->text('infoPush');

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
