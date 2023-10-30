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
    Route::post('/', 'store')->name('produtos.store');
    Route::put('/{id}', 'update')->name('produtos.update');
    Route::delete('/{id}', 'destroy')->name('produtos.destroy');
});

Route::controller(ClienteController::class)->prefix('clientes')->group(function () {
    Route::get('/', 'index')->name('clientes.index');
    Route::get('/todos', 'verTodosClientes')->name('clientes.verClientesTodos');
    //novo cliente sem divida
    Route::get('/cadastrar-novo-cliente', 'cadastrarNovoCLiente')->name('clientes.cadastrarNovoCliente');
    //novo cliente com divida
    Route::get('/cadastrar-novo-cliente-com-divida', 'cadastrarNovoCLienteComDivida')->name('clientes.cadastrarNovoClienteComDivida');
    Route::post('/', 'storeClientes')->name('clientes.storeClientes');
    Route::get('/visualizar-divida/{id}', 'showDividaCliente')->name('clientes.showDivida');
});
