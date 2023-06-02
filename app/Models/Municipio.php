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
    public function municipio_alerta(){
        return $this->hasMany(MunicipioAlerta::class, 'municipio_id');
    }
    //Módulo Notificación Envíos
    public function notificacion_evento()
    {
        return $this->hasMany(NotificacionEvento::class, 'id_Municipio', 'id');
    }
}
