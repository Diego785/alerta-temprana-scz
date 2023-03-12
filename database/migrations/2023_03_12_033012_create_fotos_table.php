<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->unsignedBigInteger('evento_id');
            $table->unsignedBigInteger('notificacion_id');
            $table->foreign('evento_id')->references('id')->on('eventos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('notificacion_id')->references('id')->on('notificacion_eventos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotos');
    }
}
