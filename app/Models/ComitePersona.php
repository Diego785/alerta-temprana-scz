<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComitePersona extends Model
{
    use HasFactory;
    protected $table = 'comite_personas';
    protected $fillable = ['nombres', 'apellidos', 'telefono', 'direccion', 'estructura_comite_id'];
    public $timestamps = false;

    //Módulo Alerta
    public function comite_alerta_envios(){
        return $this->belongsToMany(AlertaEnvio::class, 'comite_alerta_envios', 'comite_persona_id', 'alerta_envio_id')
                    ->as('comite_alerta_envio')
                    ->withPivot('alerta_envio_id', 'comite_persona_id');
    }


    //Módulo Notificación Evento
    public function estructura_comite()
    {
        return $this->belongsTo(EstructuraComite::class, 'estructura_comite_id');
    }
}
