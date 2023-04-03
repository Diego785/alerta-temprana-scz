<?php

use App\Http\Controllers\Api\AlertaEnvioCientificaController;
use App\Http\Controllers\Api\AlertaEnvioController;
use App\Http\Controllers\Api\AlertController;
use App\Http\Controllers\Api\EstadoController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\MunicipioController;
use App\Http\Controllers\Api\UnidadTecnoCientificaController;
use App\Models\AlertaEnvio;
use App\Models\UnidadTecnicoCientifica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ALERTS
Route::get('/alerts', [AlertController::class, 'index'])->name('show_alerts_api.index');
//Route::get('/alertsEvento', [AlertController::class, 'getalertaEvento'])->name('show_alertsevento_api.index');
Route::get('/alertsUnidadTecnica/{id}', [AlertController::class, 'getalertaUnidad'])->name('show_alertsUnidad_api.index');
Route::get('/events', [EventController::class, 'index'])->name('show_events_api.index');
Route::get('/municipio',[MunicipioController::class, 'index'])->name('show_municipio_api.index');
Route::get('/estado',[EstadoController::class, 'index'])->name('show_estado_api.index');
Route::get('/unidadtecno',[UnidadTecnoCientificaController::class, 'index'])->name('show_unidadtecno_api.index');
Route::get('/alertaenvio',[AlertaEnvioController::class, 'index'])->name('show_alertaenvio_api.index');
Route::get('/getalerta/{id}',[AlertaEnvioController::class,'getAlertEnvio']);
//municipioalerts
//comite
//comite alerts
//conferencia