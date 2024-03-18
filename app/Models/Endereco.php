<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'uf',
        'codigo_pais',
        'codigo_ibge_municipio',
        'municipio_nome',
        'pais_nome',
        'cep'
    ];
}
