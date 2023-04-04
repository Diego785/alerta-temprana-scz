<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstructuraComite extends Model
{
    use HasFactory;
    protected $table = 'estructura_comites';
    protected $fillable = ['cargo_comite', 'descripcion'];
    public $timestamps = false;

    public function comite_persona(){
        return $this->hasMany(ComitePersona::class, 'estructura_comite_id');
    }
}
