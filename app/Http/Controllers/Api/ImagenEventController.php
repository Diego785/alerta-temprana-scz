<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Imagen;
use Illuminate\Http\Request;

class ImagenEventController extends Controller
{
    public function index($id)
    {
        
        return Imagen::select('imagens.*')
        ->join('alerta_envios', 'imagens.alerta_envio_id', '=', 'alerta_envios.id')
        ->join('alertas', 'alerta_envios.alerta_id', '=', 'alertas.id')
        ->where('alertas.id', '=', $id)
        ->get();
        // return AlertaEnvio::select('alertas.*')
        // ->join('alertas','alerta_envios.alerta_id','=','alertas.id')
        // ->join('eventos','alertas.evento_id','=','eventos.id')
        // ->where('eventos.id','=',$id)
        // ->distinct('alertas.id')    
        //   ->get();
    
       
    }
}
