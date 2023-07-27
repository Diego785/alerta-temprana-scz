<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlertaEnvio extends Model
{
    use HasFactory;
    protected $table = 'alerta_envios';
    protected $fillable = ['alerta_id', 'estado_id', 'fecha', 'hora', 'puntoX', 'puntoY', 'video', 'url_mapa', 'description', 'img_cabecera', 'img_alerta', 'url_boletin', 'recomendacion', 'unidad_id'];
    public $timestamps = false;

    //Módulo Alertas
    public function municipio_alerta()
    {
        return $this->hasMany(MunicipioAlerta::class, 'alerta_envio_id');
    }
    public function comite_alerta_envios()
    {
        return $this->belongsToMany(ComitePersona::class, 'comite_alerta_envios', 'comite_persona_id', 'alerta_envio_id')
            ->as('comite_alerta_envio')
            ->withPivot('alerta_envio_id', 'comite_persona_id');
    }
    public function alerta()
    {
        return $this->belongsTo(Alerta::class, 'alerta_id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }
    public function unidad()
    {
        return $this->belongsTo(UnidadTecnicoCientifica::class, 'unidad_id');
    }
    public function conferencia_prensa()
    {
        return $this->hasMany(ConferenciaPrensa::class, 'alerta_envio_id');
    }

    public function image()
    {
        return $this->hasMany(Imagen::class, 'alerta_envio_id');
    }
}
