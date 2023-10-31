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

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');

Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class,'sobrenos'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');

Route::get('/login', function(){return "login";})->name('site.login');

Route::prefix('/app')->group(function(){

    Route::get('/clientes', function(){return "Clientes";})->name('app.clientes');
    Route::get('/fornecedores', 'App\Http\Controllers\FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return "Produtos";})->name('app.produtos');

});

Route::get('/teste/{p1}/{p2}', 'App\Http\Controllers\TesteController@teste')->name('teste');

Route::fallback(function(){
    echo "A rota acessada não existe! <a href='".route("site.index")."'>Clique aqui </a> para voltar para página inicial!";
});


