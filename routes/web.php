<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\COntrollers\PrincipalController::class,'principal']);

Route::get('/sobrenos', [\App\Http\COntrollers\SobreNosController::class,'sobrenos']);

Route::get('/contato', [\App\Http\COntrollers\ContatoController::class,'contato']);