<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $table = 'estados';
    protected $fillable = ['nombre', 'color'];
    public $timestamps = false;

    public function alerta_envio()
    {
        return $this->hasOne(AlertaEnvio::class, 'estado_id');
    }
}
