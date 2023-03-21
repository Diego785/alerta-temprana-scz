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
}
