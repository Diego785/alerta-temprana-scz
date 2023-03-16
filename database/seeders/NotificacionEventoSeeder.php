<?php

namespace Database\Seeders;

use App\Models\NotificacionEvento;
use Illuminate\Database\Seeder;

class NotificacionEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NotificacionEvento::create([
            'id_Operador'=>'',
            'id_Municipio'=>'',
            'id_TipoEvento'=>'', 
            'NotifFecha'=>'', 
            'NotifHora'=>'', 
            'NotifDescripcion'=>'', 
            'NotifPuntoX'=>'',
            'NotifPuntoY'=>'',
            'NotifNombresApellidos'=>'',
            'NotifTelefono'=>'',
            'NotifFoto1'=>'',
            'NotifFoto2'=>'',
            'NotifFoto3'=>'',
            'NotifFoto4'=>'',
            'NotifFoto5'=>'',
            'NotifVideo1'=>'',
            'OperFechaLlamada'=>'',
            'OperHoraLlamada'=>'',
            'OperNombresApellidosNotificante'=>'',
            'OperTelefonoNotificante'=>'',
            'OperDescripcionNotificante'=>'',
            ]);
    }
}
