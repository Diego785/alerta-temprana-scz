<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    protected $table = 'municipios';
    protected $fillable = ['municipio', 'provincia'];
    public $timestamps = false;

    public function notificacion_evento()
    {
        return $this->hasMany(NotificacionEvento::class, 'id_Municipio', 'id');
    }
}
