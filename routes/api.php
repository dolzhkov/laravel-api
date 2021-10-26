<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\API\VehicleController as VehicleController;
use \App\Http\Controllers\VendorController as VendorController;

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
Route::prefix('vehicle')->group(function (){
    Route::get('/vendors', [VehicleController::class, 'getVendors']);
    Route::get('/vendors/{id}/models', [VehicleController::class, 'getModelsByVendor']);
    Route::get('/model/{id}/generation', [VehicleController::class, 'getGenerationByModel']);
    Route::get('/model/{id}/modifications', [VehicleController::class, 'getModificationByModel']);
    Route::get('/generation/{id}/modifications', [VehicleController::class, 'getModificationByGeneration']);
});

Route::get('vendors', [VendorController::class, 'index']);

Route::get('/user/{id}', function ($id) {
   return $id;
});
