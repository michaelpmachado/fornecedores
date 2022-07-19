<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = "empresas";

    protected $fillable = [
        'fatasia',
        'nome',
        'nif',
        'telefone',
        'endereco',
        'telefone_fixo',
        'email',
        'site',
        'descricao_servico',
        'data_aniversario',
        'logotipo'
    ];

}
