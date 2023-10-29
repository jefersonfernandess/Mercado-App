<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divida extends Model
{
    use HasFactory;
    
    protected $table = 'Divida';

    protected $fillable = [
        'id_divida',
        'descricao_divida',
        'total_divida'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_divida', 'id');
    }
}
