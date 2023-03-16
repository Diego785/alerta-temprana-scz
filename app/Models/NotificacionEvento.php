<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificacionEvento extends Model
{
    use HasFactory;
    protected $table = 'notificacion_eventos';
    protected $fillable = ['id_Operador', 'id_Municipio', 'id_TipoEvento', 'NotifFecha', 'NotifHora', 'NotifDescripcion', 'NotifPuntoX', 'NotifPuntoY', 'NotifNombresApellidos', 'NotifTelefono', 'NotifFoto1', 'NotifFoto2', 'NotifFoto3', 'NotifFoto4', 'NotifFoto5', 'NotifVideo1', 'OperFechaLlamada', 'OperHoraLlamada', 'OperNombresApellidosNotificante', 'OperTelefonoNotificante', 'OperDescripcionNotificante'];
    public $timestamps = false;

    public function municipio()
    {
        return $this->hasOne(Municipio::class, 'id_Municipio', 'id');
    }
    public function operador()
    {
        return $this->hasOne(Operador::class, 'id_Operador', 'id');
    }
    public function tipo_evento()
    {
        return $this->hasOne(Municipio::class, 'id_TipoEvento', 'id');
    }
}
