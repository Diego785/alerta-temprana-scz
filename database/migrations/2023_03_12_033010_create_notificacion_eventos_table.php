<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacion_eventos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Operador')->nullable();
            $table->unsignedBigInteger('id_Municipio')->nullable();
            $table->unsignedBigInteger('id_TipoEvento');
            $table->date('NotifFecha');
            $table->time('NotifHora');
            $table->text('NotifDescripcion');
            $table->double('NotifPuntoX');
            $table->double('NotifPuntoY');
            $table->string('NotifNombresApellidos');
            $table->string('NotifTelefono');
            $table->string('NotifFoto1')->nullable();
            $table->string('NotifFoto2')->nullable();
            $table->string('NotifFoto3')->nullable();
            $table->string('NotifFoto4')->nullable();
            $table->string('NotifFoto5')->nullable();
            $table->string('NotifVideo1')->nullable();
            $table->date('OperFechaLlamada')->nullable();
            $table->time('OperHoraLlamada')->nullable();
            $table->string('OperNombresApellidosNotificante')->nullable();
            $table->string('OperTelefonoNotificante')->nullable();
            $table->text('OperDescripcionNotificante')->nullable();

            $table->foreign('id_Operador')->references('id')->on('operadors');
            $table->foreign('id_Municipio')->references('id')->on('municipios');
            $table->foreign('id_TipoEvento')->references('id')->on('eventos');
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
        Schema::dropIfExists('notificacion_eventos');
    }
}
