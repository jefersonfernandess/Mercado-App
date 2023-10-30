<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //Método para mostrar o layout principal de clientes
    public function index()
    {
        return view('clientes.index');
    }

    //Método para mostrar todos os clientes
    public function verTodosClientes()
    {
        $clientes = Cliente::get();
        return view('clientes.verClientes.index', compact('clientes'));
    }

    //Método para cadastro de novos clientes
    public function cadastrarNovoCLiente()
    {  
        return view('clientes.novoCLiente.create');
    }

    //Método para cadastro de novos clientes com divida
    public function cadastrarNovoCLienteComDivida()
    {  
        return view('clientes.novoCLiente.createComDivida');
    }

    //Metodo para adicionar novo cliente
    public function storeClientes(Request $request)
    {
        $valorDebito  = intval($request->debito_em_aberto);
        if ($valorDebito === 0) {
            Cliente::create([
                'nome' => $request->nome,
                'info_contanto' => $request->info_contato,
                'debito_em_aberto' => false
            ]);
        }
        if ($valorDebito === 1) {
            Cliente::create([
                'nome' => $request->nome,
                'info_contanto' => $request->info_contato,
                'debito_em_aberto' => true
            ]);
        }
        return redirect()->route('clientes.verClientesIndex');
    }

    //Método para mostrar a divida do cliente
    public function showDividaCliente($id)
    {
        $cliente = Cliente::with('divida')->find($id);
        return view('clientes.dividaCliente.index', compact('cliente'));
    }
}
