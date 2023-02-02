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

Route::get('/publicaciones', [\App\Http\Controllers\Api\PublicacionesApiController::class, 'index']);
Route::get('/publicaciones/{publicaciones}', [\App\Http\Controllers\Api\PublicacionesApiController::class, 'show']);

Route::get('/usuarios', [\App\Http\Controllers\Api\UsersApiController::class, 'index']);
Route::get('/usuarios/{users}', [\App\Http\Controllers\Api\UsersApiController::class, 'show']);

Route::get('/usuarios/{users}/publicaciones', [\App\Http\Controllers\Api\PublicacionesApiController::class, 'showByUser']);
