<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clients',[ClientController::class, 'index']);
Route::post('/clients', [ClientController::class, 'store']);
Route::get('/clients/{client}', [ClientController::class, 'show']);
Route::put('/clients/{client}', [ClientController::class, 'update']);
Route::delete('/clients/{client}', [ClientController::class, 'destroy']);

Route::get('/service', [ServiceController::class, 'index']);
Route::post('/service', [ServiceController::class, 'store']);
Route::get('/service/{service}', [ServiceController::class, 'show']);
Route::put('/service/{service}', [ServiceController::class, 'update']);
Route::delete('/service/{service}', [ServiceController::class, 'destroy']);

//Route::post('/clients/service', [ClientController::class, 'attach']);
//Route::post('/clients/service/detach', [ClientController::class, 'detach']);

//Route::post('/services/clients', [ServiceController::class, 'clients']);
