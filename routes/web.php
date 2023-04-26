<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutoController;
//php artisan serve

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quemsomos', function() {
    $nome = 'Rodrigo Escobar';

    return view('quemsomos', 
    [
        'nome_completo' => $nome
    ] );
});

Route::group(['prefix' => 'produto'], function() {
    Route::get('/', [ProdutoController::class, 'index']);
    Route::get('/novo_produto',
                [ProdutoController::class, 'novo_produto']
              );
    Route::post('salvar_novo',
                [ProdutoController::class, 'salvar_novo']
                );
    Route::get('/excluir/{id}',
                [ProdutoController::class, 'excluir']
            );
    Route::get('/editar/{id}',
            [ProdutoController::class, 'editar']
        );   
    Route::post('salvar_alteracao',
            [ProdutoController::class, 'salvar_alteracao']
        );
        
    Route::get('/pesquisa',
            [ProdutoController::class, 'pesquisa']
            );
});
