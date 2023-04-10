<?php

use App\Http\Controllers\Api\AlertController as ApiAlertController;
use App\Http\Controllers\Alerts\AlertController;
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
Route::get('/alerts', [ApiAlertController::class, 'index'])->name('show_alerts_api.index');


//Testing uploading images locally
// Route::get('/upload-image', [AlertController::class, 'upload'])->name('uploading_imgs');
Route::post('/api-save-image', [ApiAlertController::class, 'save'])->name('api.saving_imgs');
