<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'nome',
        'info_contato',
        'debito_em_aberto'
    ];

    protected $attributes = ['info_contato' => null];

    public function divida()
    {       
        return $this->hasOne(Divida::class, 'id_divida', 'id');
    }
}
