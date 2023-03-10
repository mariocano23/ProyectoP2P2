<?php

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

Route::get('/', [\App\Http\Controllers\PublicacionesController::class, 'index']);

Route::get('/publicaciones',[\App\Http\Controllers\PublicacionesController::class, 'index']);
Route::get('/publicaciones-busqueda/',[\App\Http\Controllers\PublicacionesController::class, 'search']);

Route::get('/publicacion/{publicaciones}',[\App\Http\Controllers\PublicacionesController::class, 'show']);
Route::post('/publicaciones',[\App\Http\Controllers\PublicacionesController::class, 'store'])->name('guardarPublicacion');
Route::put('/publicacion/{publicaciones}',[\App\Http\Controllers\PublicacionesController::class, 'update']);
Route::delete('/publicacion/{publicaciones}',[\App\Http\Controllers\PublicacionesController::class, 'destroy']);

Route::get('/modificar-publicacion/{publicaciones}',[\App\Http\Controllers\PublicacionesController::class, 'edit']);
Route::get('/crear-publicacion',[\App\Http\Controllers\PublicacionesController::class, 'create']);

Route::get('/register',[\App\Http\Controllers\RegisterController::class, 'create']);
Route::post('/register',[\App\Http\Controllers\RegisterController::class, 'store']);

Route::get('/login',[\App\Http\Controllers\RegisterController::class, 'createLogin']);
Route::post('/login',[\App\Http\Controllers\RegisterController::class, 'storeLogin']);

Route::get('/logout',[\App\Http\Controllers\RegisterController::class, 'destroyLogin']);

Route::get('/mi-cuenta/{user}',[\App\Http\Controllers\RegisterController::class, 'show']);

Route::put('/mi-cuenta/{user}',[\App\Http\Controllers\RegisterController::class, 'update']);
