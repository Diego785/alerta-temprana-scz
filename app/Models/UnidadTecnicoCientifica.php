<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadTecnicoCientifica extends Model
{
    use HasFactory;
    protected $table = 'unidad_tecnico_cientificas';
    protected $fillable = ['nombre', 'sigla', 'telefono', 'description', 'url_web', 'responsable', 'clasificacion', 'tipo', 'direccion', 'puntoX', 'puntoY'];
    public $timestamps = false;

    //Módulo Alerta
    public function alerta()
    {
        return $this->hasMany(Alerta::class, 'evento_id', 'id');
    }
}
