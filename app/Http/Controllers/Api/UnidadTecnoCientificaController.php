<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UnidadTecnicoCientifica;
use Illuminate\Http\Request;

class UnidadTecnoCientificaController extends Controller
{
    public function index(){
        return UnidadTecnicoCientifica::select('id','nombre', 'sigla')->get();

        // return Recorrido::join('lineas', 'recorridos.linea_id', 'lineas.id')
        // ->select('recorridos.id', 'recorridos.code', 'recorridos.velocidad', 'recorridos.descripcion as descripcion_micro', 'lineas.descripcion as descripcion_linea', 'lineas.foto', 'lineas.telefono')
        // ->where('recorridos.id', $request->recorrido)
        // ->get();
        
    }
}
