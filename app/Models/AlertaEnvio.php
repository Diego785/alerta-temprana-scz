<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlertaEnvio extends Model
{
    use HasFactory;
    protected $table = 'alerta_envios';
    protected $fillable = ['alerta_id', 'estado_id', 'fecha', 'hora', 'puntoX', 'puntoY', 'url_mapa','description', 'img_cabecera', 'img_alerta', 'url_boletin', 'recomendacion'];
    public $timestamps = false;

    //Módulo Alertas
    public function municipio_alertas(){
        return $this->belongsToMany(Municipio::class, 'municipio_alertas', 'municipio_id', 'alerta_envio_id')
                    ->as('municipio_alerta')
                    ->withPivot('id', 'municipio_id', 'alerta_envio_id');
    }
    public function comite_alerta_envios(){
        return $this->belongsToMany(ComitePersona::class, 'comite_alerta_envios', 'comite_persona_id', 'alerta_envio_id')
                    ->as('comite_alerta_envio')
                    ->withPivot('alerta_envio_id', 'comite_persona_id');
    }
    public function alerta(){
        return $this->belongsTo(Alerta::class, 'alerta_id');
    }
  
    public function estado(){
        return $this->belongsTo(Estado::class, 'estado_id');
    }
    public function conferencia_prensa(){
        return $this->hasMany(ConferenciaPrensa::class, 'alerta_envio_id');
    }

    public function image(){
        return $this->hasMany(Imagen::class, 'alerta_envio_id');
    }
}
