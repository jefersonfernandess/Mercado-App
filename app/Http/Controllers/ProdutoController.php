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
    }
}
