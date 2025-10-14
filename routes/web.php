<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return 'Olá, seja bem-vindo ao curso';
});
*/

Route::get('/', [\App\Http\Controllers\Principalcontroller::class, 'principal']);

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNoscontroller::class, 'SobreNos']);

Route::get('/contato', [\App\Http\Controllers\Contatocontroller::class, 'contato']);

// 4 novas rotas
Route::get('/login', function(){ return 'Login'; });
Route::get('/clientes', function(){ return 'Clientes'; });
Route::get('/fornecedores', function(){ return 'Fornecedores'; });
Route::get('/produtos', function(){ return 'Produtos'; });