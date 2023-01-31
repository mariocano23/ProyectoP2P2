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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/publicaciones',[\App\Http\Controllers\PublicacionesController::class, 'index']);

Route::get('/publicacion/{publicaciones}',[\App\Http\Controllers\PublicacionesController::class, 'show']);

Route::post('/publicaciones',[\App\Http\Controllers\PublicacionesController::class, 'store'])->name('guardarPublicacion');

Route::get('/crear-publicacion',[\App\Http\Controllers\PublicacionesController::class, 'create']);
