<?php

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

route::get('usuarios','App\Http\Controllers\UsuarioController@index');
route::post('usuarios','App\Http\Controllers\UsuarioController@store');
route::get('usuarios/{usuario}','App\Http\Controllers\UsuarioController@show');
route::put('usuarios/{usuario}','App\Http\Controllers\UsuarioController@update');
route::delete('usuarios/{id}','App\Http\Controllers\UsuarioController@index');
