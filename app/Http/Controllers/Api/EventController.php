<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return Evento::all();
    }
}
