<?php

use App\Http\Controllers\Alerts\AlertController;
use App\Http\Controllers\Gestion\Comite\EstructuraComiteController;
use App\Http\Livewire\Gestion\Comite\EstructuraComite;
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


//Sistema de Gestión
Route::get('/show-estructura-comite', [EstructuraComiteController::class, 'show'])->name('show_estructura_comite');

// PDFS
Route::get('/alertas/pdf/{myId}', [AlertController::class, 'generatePDF'])->name('alerts_list.pdf');



Route::get('/layout-1', function () {
    return view('layouts.my_menu_layouts.menu_1');
})->name('layout_1');
Route::get('/layout-1', function () {
    return view('layouts.my_menu_layouts.menu_1');
})->name('layout_1');






// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
