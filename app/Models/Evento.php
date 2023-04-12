<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $table = 'eventos';
    protected $fillable = ['id','tipoEvento', 'descripcionTipoEvento', 'foto'];
    public $timestamps = false;

    // public function alerta()
    // {
    //     return $this->hasOne(Alerta::class, 'evento_id', 'id');
    // }

    //Módulo Alerta
    public function alerta()
    {
        return $this->hasMany(Alerta::class, 'evento_id', 'id');
    }

    //Módulo Notificación Evento
    public function notificacion_evento()
    {
        return $this->hasMany(NotificacionEvento::class, 'id_TipoEvento', 'id');
    }
}
