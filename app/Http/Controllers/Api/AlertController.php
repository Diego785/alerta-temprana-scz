<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alerta;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function index(){
        return Alerta::all();

    }
    
    public function getalertaEvento(){
        return Alerta::join('eventos','alertas.evento_id', 'eventos.id')
        ->select('alertas.id','alertas.nombre', 'alertas.fecha', 'alertas.hora', 'alertas.description' ,'alertas.evento_id', 'eventos.tipoEvento')->get();
    }
    public function getalertaUnidad($id){
        return Alerta::join('unidad_tecnico_cientificas','alertas.unidad_id', 'unidad_tecnico_cientificas.id' )
        ->select(
            'alertas.id',
            'alertas.nombre',
            'alertas.fecha', 
            'alertas.hora',
            'alertas.description',
            'alertas.geoX', 
            'alertas.geoY', 
            'alertas.url_mapa',
            'alertas.evento_id',
            'unidad_tecnico_cientificas.nombre as nombreUnidadTecnocientifica',
            'unidad_tecnico_cientificas.telefono'
             )
             ->where('alertas.evento_id', '=', $id)
             ->get();
    }


    
    // return Recorrido::join('lineas', 'recorridos.linea_id', 'lineas.id')
    // ->select('recorridos.id', 'recorridos.code', 'recorridos.velocidad', 'recorridos.descripcion as descripcion_micro', 'lineas.descripcion as descripcion_linea', 'lineas.foto', 'lineas.telefono')
    // ->where('recorridos.id', $request->recorrido)
    // ->get();
}
