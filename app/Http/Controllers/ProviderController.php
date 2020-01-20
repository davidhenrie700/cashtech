<?php

namespace App\Http\Controllers;

use App\Provider;
// use Yajra\DataTables\Facades\DataTables;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProviderController extends Controller
{

    public function show()
    {
        $providers = Provider::all();

        return view('register.provider.formProvider', compact('providers'));
    }

    public function store(Request $request, Provider $provider)
    {   
    
        $request->validate([
            'cpf_cnpj' => 'required|unique:providers|min:11',
            'telefone' => 'required|unique:providers|min:11',
            'email' => 'required|unique:providers|email:rfc',
            'conta' => 'required|unique:providers',
            'tipo_prof' => 'required',
            'cep' => 'required|min:8',
            'endereco' => 'required',
            'num_end' => 'required',
            'cidade' => 'required',
            'bairro' => 'required',
            'estado' => 'required',
            'tipo_servico' => 'required',
            'area' => 'required',
            'valor_liquido' => 'required',
            'valor_bruto' => 'required',
            'vencimento' => 'required',
            'tipo_conta' => 'required',
            'banco_prof' => 'required',
            'agencia' => 'required',
            'digito_agencia' => 'required',
            'digito_conta' => 'required'
        ]);
        
        $provider->create($request->except(['_token']));

        return redirect()->route('provider.show')->with('message', 'Profissional cadastrado com sucesso!!');

    }

    public function showEdit(Provider $provider)
    {
        return view('register.provider.editProvider', compact('provider'));
    }

    public function edit(Request $request, Provider $provider)
    {
        $provider->update($request->except(['id']));

        return redirect()->route('provider.show')->with('message', 'Profissional alterado com sucesso!');
    }
}
