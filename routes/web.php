<?php

use App\Http\Controllers\Alerts\AlertController;
// use App\Http\Controllers\Api\EstadoController;
use App\Http\Controllers\Gestion\Alert\AlertController as AlertAlertController;
use App\Http\Controllers\Gestion\Comite\EstructuraComiteController;
use App\Http\Livewire\Gestion\Comite\EstructuraComite;
use App\Http\Controllers\Gestion\Estado\EstadoController as EstadoEstadoController;
use App\Http\Controllers\Gestion\Municipio\MunicipioController;
use App\Http\Controllers\Gestion\Unidad\UnidadTecnocientificaController;
use App\Http\Controllers\Gestion\Usuario\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  [AlertController::class, 'index'])->name('show_alerts');

Route::get('/alerts', [AlertController::class, 'index'])->name('show_alerts.index');
Route::get('/alerts/{id}', [AlertController::class, 'showByCategory'])->name('main_alerts.index');
Route::get('/sending-alerts/{alerta_id}/{evento_id}', [AlertController::class, 'sendingAlert'])->name('sending_alerts.index');

//Testing uploading images locally
Route::get('/upload-image', [AlertController::class, 'upload'])->name('uploading_imgs');
Route::post('/save-image', [AlertController::class, 'save'])->name('saving_imgs');
//Testing PDFS
Route::get('/testing-pdfs', [AlertController::class, 'generatePdf'])->name('generate.pdf');


// PDFS
Route::get('/alertas/pdf/{myId}', [AlertController::class, 'generatePDF'])->name('alerts_list.pdf');
Route::get('/details-alerts/pdf/{eventId}/{alertId}', [AlertController::class, 'generateDetailAlertPDF'])->name('detail_alerts_list.pdf');



//Sistema de Gestión


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    //Sistema de Gestión

    //Diego
    Route::get('/gestion/comite', [EstructuraComiteController::class, 'show'])->name('show_estructura_comite_gestion');
    Route::get('/gestion/alert', [AlertAlertController::class, 'show'])->name('show_alerta_gestion');
    //------------------------------------------------------------------------------------------//  

    Route::get('/gestion/show-estado', [EstadoEstadoController::class, 'show'])->name('show_estado');
    Route::get('/gestion/show-municipio', [MunicipioController::class, 'show'])->name('show_municipio');
    Route::get('/gestion/show-unidad-tecnocientifica', [UnidadTecnocientificaController::class, 'show'])->name('show_unidad_tecnocientifica');
    Route::get('/gestion/create-usuarios', [UsuarioController::class, 'crearusuario'])->name('crear_usuarios');
    Route::get('/gestion/show-usuarios', [UsuarioController::class, 'show'])->name('show_usuarios');

});





// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
