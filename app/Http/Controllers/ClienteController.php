<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Divida;
use GuzzleHttp\Client;
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
        return view('clientes.novoCliente.create');
    }

    //Método para cadastro de novos clientes com divida
    public function cadastrarNovoCLienteComDivida()
    {
        return view('clientes.novoCliente.createComDivida');
    }

    //Metodo para adicionar novo cliente
    public function storeClientes(Request $request)
    {
        $valorDebito  = intval($request->debito_em_aberto);
        if ($valorDebito === 0) {
            Cliente::create([
                'nome' => $request->nome,
                'info_contato' => $request->info_contato,
                'debito_em_aberto' => false
            ]);
        }
        if ($valorDebito === 1) {
            $cliente = Cliente::create([
                'nome' => $request->nome,
                'info_contato' => $request->info_contato,
                'debito_em_aberto' => true,
            ]);
            if ($cliente) {
                Divida::create([
                    'id_divida' => $cliente->id,
                    'descricao_divida' => $request->descricao_divida,
                    'total_divida' => $request->total_divida
                ]);
            }
        }
        return redirect()->route('clientes.verClientesTodos');
    }
    //Método para mostrar a divida do cliente
    public function showDividaCliente($id)
    {
        $cliente = Cliente::with('divida')->find($id);
        return view('clientes.dividaCliente.index', compact('cliente'));
    }

    public function updateCliente(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            return redirect()->route('clientes.verClientesTodos');
        }

        $cliente->update($request->all());
        return redirect()->route('clientes.verClientesTodos');
    }

    public function destroyCliente($id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            return redirect()->route('clientes.verClientesTodos');
        }

        $cliente->delete();
        return redirect()->route('clientes.verClientesTodos');
    }
}
