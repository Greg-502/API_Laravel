<?php

use App\Http\Controllers\AuthenticatorController;
use App\Http\Controllers\PacienteController;
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

// Route::get('/pacientes', [PacienteController::class, 'index']);
// Route::post('/pacientes', [PacienteController::class, 'store']);
// Route::get('/pacientes/{paciente}', [PacienteController::class, 'show']);
// Route::put('/pacientes/{paciente}', [PacienteController::class, 'update']);
// Route::delete('/pacientes/{paciente}', [PacienteController::class, 'destroy']);

Route::post('register', [AuthenticatorController::class, 'register']);
Route::post('login', [AuthenticatorController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::apiResource('pacientes', PacienteController::class);
    Route::post('logout', [AuthenticatorController::class, 'logout']);
});