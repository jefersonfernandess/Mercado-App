<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //Controller para mostrar o layout principal de clientes
    public function index() {
        return view('clientes.index');
    }

    //Controller para mostrar todos os clientes
    public function verClientesIndex() {
        $clientes = Cliente::get();
        return view('clientes.verClientes.index', compact('clientes'));
    }

    //Controller para cadastro de novos clientes
    public function cadastrarNovoCLiente() {
        return view('clientes.novoCLiente.create');
    }   

    public function storeClientes(Request $request) {

        $valorDebito  = intval($request->debito_em_aberto);
        
        if ($valorDebito === 0) {
            Cliente::create([
                'nome' => $request->nome,
                'info_contanto' => $request->info_contato,
                'debito_em_aberto' => false
            ]);
        }

        if($valorDebito === 1) {
            Cliente::create([
                'nome' => $request->nome,
                'info_contanto' => $request->info_contato,
                'debito_em_aberto' => true
            ]);
        }
        return redirect()->route('clientes.verClientesIndex');
    }
}
