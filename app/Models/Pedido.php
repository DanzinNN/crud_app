<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod_pedido',
        'cliente',
        'produto',
        'quantidade',
        'valor_pedido',
        'valor_desc',
       
    ];
}
