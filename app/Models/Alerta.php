<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    use HasFactory;
    protected $table = 'alertas';
    protected $fillable = ['id','nombre', 'fecha', 'hora', 'description', 'tipo', 'geoX', 'geoY', 'url_mapa', 'evento_id','unidad_id'];
    //Módulo Alerta
    public function evento()
    {
        return $this->belongsTo(Evento::class, 'evento_id', 'id');
    }

    public function unidad()
    {
        return $this->belongsTo(UnidadTecnicoCientifica::class, 'unidad_id', 'id');
    }

    public function alerta_envio(){
        return $this->hasMany(AlertaEnvio::class, 'alerta_id');
    }

  

    // public function estado()
    // {
    //     return $this->belongsTo(Estado::class, 'estado_id', 'id');
    // }
}
