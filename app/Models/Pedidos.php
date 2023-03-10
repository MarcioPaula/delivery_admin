<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'satisfação',
        'valor-total',
        'meio_pagamento',
        'nome_cliente',
        'status',
        'cod_estabel',
    ];
}
