<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\UsuarioController;
use App\Http\Controllers\Site\CursoController;

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

//Usuarios
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuario/{id}', [UsuarioController::class, 'getUser']);
Route::post('usuario/create', [UsuarioController::class, 'create']);
Route::delete('/usuario/{id}', [UsuarioController::class, 'destroy']);
Route::put('/usuario/{id}', [UsuarioController::class, 'update']);

//Cursos
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/curso/{id}', [CursoController::class, 'getCourse']);
Route::post('/curso/create', [CursoController::class, 'create']);
Route::put('/curso/{id}', [CursoController::class, 'update']);
