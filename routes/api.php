<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tareasController;

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
Route::post('/agregar', [tareasController::class, 'crearTarea'])->name('agregar');
Route::post('/modificar', [tareasController::class, 'modificarTarea'])->name('modificar');
Route::post('/eliminar', [tareasController::class, 'eliminarTarea'])->name('eliminar');
Route::post('/recuperar', [tareasController::class, 'recuperarTarea'])->name('recuperar');
Route::post('/titulo', [tareasController::class, 'buscarTitulo'])->name('titulo');