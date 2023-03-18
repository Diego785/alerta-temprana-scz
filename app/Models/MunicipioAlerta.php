<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MunicipioAlerta extends Model
{
    use HasFactory;
    protected $table = 'municipio_alertas';
    protected $fillable = ['alerta_envio_id', 'municipio_id'];
    public $timestamps = false;

    public function municipio(){
        return $this->belongsTo(Municipio::class, 'municipio_id');
    }
    public function alerta_envio(){
        return $this->belongsTo(AlertaEnvio::class, 'alerta_envio_id');
    }
}
