<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return 'Olá, seja bem-vindo ao curso';
});
*/

Route::get('/', [\App\Http\Controllers\Principalcontroller::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNoscontroller::class, 'SobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\Contatocontroller::class, 'contato'])->name('site.contato');
Route::get('/login', function(){ return 'Login'; })->name('site.login');

// 3 novas rotas

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function(){ return 'Fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');
});

//FORMAS DE CRIAR UM REDIRECIONAMENTO Route::redirect('/rota2', '/rota1');
Route::get('/rota1', function() {
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function() {
    return redirect()->route('site.rota1');
})->name('site.rota2');

//ROTA DE CONTINGÊNCIA OU FALLBACK, TEM A FUNÇÃO DE EVITAR A TELA DE ERRO AO USUÁRIO FINAL.
Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui<a/>';
});