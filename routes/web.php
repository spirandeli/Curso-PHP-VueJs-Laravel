<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){return 'login';})->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', function(){return 'fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});

