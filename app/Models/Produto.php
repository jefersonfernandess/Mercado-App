<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    protected $fillable = [
        'nome', 
        'descricao', 
        'preco', 
        'quantidade', 
        'codigo_de_barras'
    ];

    protected $attributes = [ 'codigo_de_barras' => null, 'descricao' => null ];
}
