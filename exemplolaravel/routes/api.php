<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('produto', [ProdutoController::class, 'store']); 

Route::get('produto', [ProdutoController::class, 'index']);

Route::put('produto', [ProdutoController::class, 'update']); 

Route::delete('produto/{id}', [ProdutoController::class, 'delete']);

Route::get('produto/{id}', [ProdutoController::class, 'show']); 

Route::get('produto/find/name', [ProdutoController::class, 'findByName']);

Route::get('produto/find/maior', [ProdutoController::class, 'pesquisarValorMaiorQue']);

Route::get('produto/find/entre/valores', [ProdutoController::class, 'pesquisarEntreValores']); 

Route::get('produto/find/ano', [ProdutoController::class, 'pesquisarPorAno']);

Route::get('produto/find/marca', [ProdutoController::class, 'pesquisarMarca']);

Route::get('produto/find/mes', [ProdutoController::class, 'pesquisarPorMonth']);
/*---------------------------------------------------------------------------------------*/

Route::post('cliente', [ClienteController::class, 'store']);

Route::get('pesquisar/email', [ClienteController::class, 'findByEmail']);

Route::get('pesquisar/CPF', [ClienteController::class, 'findByCPF']);

Route::get('pesquisar/cidade', [ClienteController::class, 'findByCidade']);

Route::get('pesquisar/estado', [ClienteController::class, 'findByEstado']);

Route::get('pesquisar/ano/nascimento', [ClienteController::class, 'findByAno']);

Route::get('pesquisar/mes/nascimento', [ClienteController::class, 'findByMes']);

Route::get('pesquisar/mes/ano', [ClienteController::class, 'findByMesAno']);

Route::get('pesquisar/bairro', [ClienteController::class, 'findByBairro']);

Route::get('pesquisar/nome', [ClienteController::class, 'findByName']);

Route::get('pesquisar/{id}', [ClienteController::class, 'findById']);