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


Route::controller(ProdutoController::class)->group(function() {
    Route::get('/produtos', 'index')->name('produtos.index');
    Route::post('/produtos', 'store')->name('produtos.store');
    Route::put('/produtos/{id}', 'update')->name('produtos.update');
    Route::delete('/produtos/{id}', 'destroy')->name('produtos.destroy');
});

Route::controller(ClienteController::class)->group(function () {
    Route::get('/clientes', 'index')->name('clientes.index');
    Route::get('/clientes/todos', 'verClientesIndex')->name('clientes.verClientesIndex');
    Route::get('/clientes/cadastrar-novo-cliente', 'cadastrarNovoCLiente')->name('clientes.cadastrarNovoCliente');
    Route::post('/clientes', 'storeClientes')->name('clientes.storeClientes');
});