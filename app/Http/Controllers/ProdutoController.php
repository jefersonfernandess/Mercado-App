<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = Produto::get();
        return view('produtos.index', compact('produtos'));
    }

    public function create() {
        return view('produtos.create');
    }

    public function store(Request $request) {

        Produto::create($request->all());
        return redirect()->route('produtos.index');
    }

    public function update(Request $request, $id) {
        $produto = Produto::find($id);
        if(!isset($id)) {
            return redirect()->route('produtos.index');
        }
        
        $produto->update($request->all());
        return redirect()->route('produtos.index');
    }

    public function destroy($id) {
        $produto = Produto::find($id);
        if(!isset($id)) {
            return redirect()->route('produtos.index');
        }      
        $produto->delete();
        return redirect()->route('produtos.index');
    }
}
