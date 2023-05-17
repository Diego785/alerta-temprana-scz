<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $table = 'imagens';
    protected $fillable = ['id','path', 'description'];
    public $timestamps = false;

    public function alerta_envio(){
        return $this->belongsTo(AlertaEnvio::class, 'alerta_envio_id');
    }
}
