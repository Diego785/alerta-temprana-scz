<?php

namespace App\Http\Controllers\Alerts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function index(){
        return view('my_views.alerts.show_alerts');
    }
}
