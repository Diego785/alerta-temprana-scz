<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operador extends Model
{
    use HasFactory;
    protected $table = 'operadors';
    protected $fillable = ['nombresApellidos', 'celular'];
    public $timestamps = false;

    public function notificacion_evento()
    {
        return $this->hasMany(NotificacionEvento::class, 'id_Operador', 'id');
    }
}
