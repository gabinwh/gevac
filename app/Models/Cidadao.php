<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cidadao extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_nascimento',
        'codigo_raca_cor',
        'codigo_nacionalidade',
        'sexo_biologico',
        'endereco_id'
    ];

    public function endereco(): BelongsTo
    {
        return $this->belongsTo(Endereco::class);
    }
}
