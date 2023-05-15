<?php

use App\Http\Controllers\Api\AlertaEnvioController;
use App\Http\Controllers\Api\AlertController;
use App\Http\Controllers\Api\EstadoController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\MunicipioController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\UnidadTecnoCientificaController;
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


// Route::get('/alerts', [AlertController::class, 'index'])->name('show_alerts_api.index');


//Testing uploading images locally
// Route::get('/upload-image', [AlertController::class, 'upload'])->name('uploading_imgs');
Route::post('/api-save-image', [NotificationController::class, 'save'])->name('api.saving_imgs');

// ALERTS
Route::get('/alerts', [AlertController::class, 'index'])->name('show_alerts_api.index');
//Route::get('/alertsEvento', [AlertController::class, 'getalertaEvento'])->name('show_alertsevento_api.index');
Route::get('/alertas/{id}', [AlertController::class, 'alertas'])->name('show.alerta');
Route::get('/events', [EventController::class, 'index'])->name('show_events_api.index');
Route::get('/municipio',[MunicipioController::class, 'index'])->name('show_municipio_api.index');
Route::get('/estado',[EstadoController::class, 'index'])->name('show_estado_api.index');
Route::get('/unidadtecno',[UnidadTecnoCientificaController::class, 'index'])->name('show_unidadtecno_api.index');
Route::get('/alertaenvio',[AlertaEnvioController::class, 'index'])->name('show_alertaenvio_api.index');
Route::get('/getalerta/{id}',[AlertaEnvioController::class,'getAlertEnvio']);

// Testing 
Route::get('/testing-critic-alerts',[AlertaEnvioController::class,'getCriticAlerts']);
//municipioalerts
//comite
//comite alerts
//conferencia
