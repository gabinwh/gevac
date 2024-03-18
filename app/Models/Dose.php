<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dose extends Model
{
    use HasFactory;

    protected $fillable = [
        'cidadao_id',
        'vacina_id',
        'estabelecimento_id',
        'grupo_atendimento',
        'grupo_atendimento_codigo',
        'categoria_nome',
        'categoria_codigo',
        'lote',
        'data_aplicacao',
        'descricao_dose',
    ];

    public function cidadao(): BelongsTo
    {
        return $this->belongsTo(Cidadao::class);
    }

    public function vacina(): BelongsTo
    {
        return $this->belongsTo(Vacina::class);
    }

    public function estabelecimento(): BelongsTo
    {
        return $this->belongsTo(Estabelecimento::class);
    }
}
