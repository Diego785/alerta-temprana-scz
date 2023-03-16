<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    use HasFactory;
    protected $table = 'alertas';
    protected $fillable = ['nombre', 'description', 'fecha', 'hora', 'geoX', 'geoY', 'evento_id', 'estado_id', 'municipio_id', 'unidad_id'];
    public $timestamps = false;

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'evento_id', 'id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado_id', 'id');
    }
}
