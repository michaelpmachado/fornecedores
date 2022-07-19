<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clique extends Model
{
    protected $table = "cliques";

    protected $fillable = [
        'id_empresa',
        'id_categoria',
        'descricao'
    ];

    public function empresa(){
        return $this->belongsTo(Empresa::class, 'id_empresa', 'id');
    }
}
