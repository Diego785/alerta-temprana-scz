<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComitePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comite_personas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_estructuraComite');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('direccion');
            $table->foreign('id_estructuraComite')->references('id')->on('estructura_comites');

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
        Schema::dropIfExists('comite_personas');
    }
}
