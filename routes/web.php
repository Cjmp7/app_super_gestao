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

// nome, categoria, assunto, mensagem. separa por barra e chaves
Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem}', function(string $nome, string $categoria, string $assunto, string $mensagem) {
    echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});