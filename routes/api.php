<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionesController;
use App\Http\Controllers\ProvinciasController;
use App\Http\Controllers\CiudadesController;
use App\Http\Controllers\CallesController;

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
Route::get('regiones',[RegionesController::class, 'index']);
Route::get('regiones/{id}', [RegionesController::class, 'show']);

Route::get('provincias',[ProvinciasController::class, 'index']);
Route::get('provincias/{id}', [ProvinciasController::class, 'show']);
Route::get('regiones/provincias/{id}',[ProvinciasController::class, 'mostrarProvinciaPorRegion']);

Route::get('ciudades',[CiudadesController::class, 'index']);
Route::get('ciudades/{id}', [CiudadesController::class, 'show']);
Route::get('provincias/ciudades/{id}',[CiudadesController::class, 'mostrarCiudadPorProvincia']);

Route::get('calles',[CallesController::class, 'index']);
Route::get('calles/{id}', [CallesController::class, 'show']);
Route::get('calle/datos/{id}', [CallesController::class, 'mostrarCalleAsiEnGeneral']);
Route::get('calle/datos', [CallesController::class, 'mostrarUnaPuraCalle']);
Route::post('calles',[CallesController::class, 'store']);
Route::put('calles/{id}',[CallesController::class, 'update']);
Route::delete('calles/{id}',[CallesController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

    
});
