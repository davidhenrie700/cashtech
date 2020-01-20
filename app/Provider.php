<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';

    protected $fillable = [
        'nome',
        'tipo_prof',
        'pis',
        'data_nasc',
        'cpf_cnpj',
        'cep',
        'endereco',
        'bairro',
        'num_end',
        'complemento',
        'cidade',
        'estado',
        'telefone',
        'email',
        'cnae',
        'tipo_servico',
        'area',
        'valor_bruto',
        'valor_liquido',
        'vencimento',
        'tipo_conta',
        'banco_prof',
        'agencia',
        'conta',
        'digito_conta',
        'digito_agencia'
    ];

}
