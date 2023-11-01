<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
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

Route::get('/', function () {
    return view('site.index');
});

Route::controller(ProdutoController::class)->prefix('produtos')->group(function () {
    Route::get('/', 'index')->name('produtos.index');
    Route::post('/criar', 'store')->name('produtos.store');
    Route::put('/atualizar/{id}', 'update')->name('produtos.update');
    Route::delete('/apagar/{id}', 'destroy')->name('produtos.destroy');
});

Route::controller(ClienteController::class)->prefix('clientes')->group(function () {
    Route::get('/', 'index')->name('clientes.index');
    Route::get('/todos', 'verTodosClientes')->name('clientes.verClientesTodos');   
    Route::get('/cadastrar-novo-cliente', 'cadastrarNovoCLiente')->name('clientes.cadastrarNovoCliente');
    Route::get('/cadastrar-novo-cliente-com-divida', 'cadastrarNovoCLienteComDivida')->name('clientes.cadastrarNovoClienteComDivida');
    Route::get('/visualizar-divida/{id}', 'showDividaCliente')->name('clientes.showDivida');
    Route::post('/salvar', 'storeClientes')->name('clientes.storeClientes');
    Route::put('/atualizar/{id}', 'updateCliente')->name('clientes.updateClientes');
    Route::delete('/apagar/{id}', 'destroyCliente')->name('clientes.destroyClientes');
});
