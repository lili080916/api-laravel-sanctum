<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PacienteController;
use App\Http\Controllers\API\AutenticarController;

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

Route::post('registro', [AutenticarController::class, 'registrar']);

Route::post('login', [AutenticarController::class, 'login']);

Route::group(['middleware'=> ['auth:sanctum']], function(){

    Route::post('logout', [AutenticarController::class, 'logout']);
    
    Route::apiResource('pacientes', PacienteController::class);
});

