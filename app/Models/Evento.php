<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $table = 'eventos';
    protected $fillable = ['nombre', 'foto'];
    public $timestamps = false;

    public function alerta()
    {
        return $this->hasOne(Alerta::class, 'evento_id', 'id');
    }
}
