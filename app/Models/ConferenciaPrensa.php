<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenciaPrensa extends Model
{
    use HasFactory;
    protected $table = 'conferencia_prensas';
    protected $fillable = ['fecha', 'hora', 'portavoz', 'img1', 'img2', 'img3', 'img4', 'img5', 'video', 'description', 'institucion'];
    public $timestamps = false;

    public function alerta_envio(){
        return $this->belongsTo(AlertaEnvio::class, 'alerta_envio_id');
    }
}
