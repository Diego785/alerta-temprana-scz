<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    protected $table = 'municipios';
    protected $fillable = ['nombre', 'provincia'];
    public $timestamps = false;

    //Módulo Alertas
    public function municipio_alertas()
    {
        return $this->belongsToMany(AlertaEnvio::class, 'municipio_alertas', 'municipio_id', 'alerta_envio_id')
            ->as('municipio_alerta')
            ->withPivot('id', 'municipio_id', 'alerta_envio_id');
    }
    //Módulo Notificación Envíos
    public function notificacion_evento()
    {
        return $this->hasMany(NotificacionEvento::class, 'id_Municipio', 'id');
    }
}
