<?php

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
Route::get('/slasticas', [SlasticaController::class, 'index']);
Route::get('/slasticas{slastica}', [SlasticaController::class, 'show']);
Route::post('/slasticas', [SlasticatController::class, 'store']);
Route::put('/slasticas/{slastica}', [SlasticaController::class, 'update']);
Route::delete('/slasticas/{id}', [TestController::class, 'deleteSlastica']);
