<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'cnes_valor',
        'razao_social',
        'nome_fantasia',
        'codigo_municipio',
        'municipio',
        'uf'
    ];
}
