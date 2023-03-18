<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComiteAlertaEnvio extends Model
{
    use HasFactory;
    protected $table = 'comite_alerta_envios';
    protected $fillable = ['alerta_envio_id', 'comite_persona_id'];
    public $timestamps = false;

    public function alerta_envio()
    {
        return $this->belongsTo(AlertaEnvio::class, 'alerta_envio_id');
    }

    public function comite_persona()
    {
        return $this->belongsTo(ComitePersona::class, 'comite_persona_id');
    }
}
