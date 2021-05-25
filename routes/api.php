<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\CocheController;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


//rutas usuario
Route::post("/usuario",[userController::class,'validar']);

//ruta coches

Route::group(['prefix'=>'coche'],function(){
    Route::get("/mostrar", [CocheController::class, 'index']);
    Route::post('/store', [CocheController::class, 'store']);
    Route::get('/show/:id', [CocheController::class, 'show']);
    Route::put('/update/:id', [CocheController::class, 'update']);
    Route::delete('/destroy/:id', [CocheController::class, 'destroy']);
    Route::get('/marcas', [CocheController::class, 'marcas']);
});