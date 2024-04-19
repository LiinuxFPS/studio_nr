<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadastroCliente extends Model
{
    protected $fillable = [
        'nome_completo',
        'data_nascimento',
        'profissao',
        'idade',
        'sexo',
        'telefone'
    ];
}
