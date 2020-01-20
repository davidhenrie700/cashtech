@extends('layouts.app')
@section('title', 'Editar Profissional')

@section('content')
<form action="{{ route('provider.edit', ['provider' => $provider->id]) }}" method="POST" id="form-provider">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="col-md-3">
            <label for="nome">Nome/Razão Social</label>
            <input type="text" class="form-control" id="nome" name="nome" maxlength="140" value="{{ $provider->nome }}">
        </div>
        <div class="col-md-1">
            <label for="tipo_prof">Pessoa</label>

            @if ($provider->tipo_prof === 'PF')
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_prof" id="PJ" value="PJ">
                <label class="form-check-label" for="PJ">Jurídica</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" checked type="radio" name="tipo_prof" id="PF" value="PF">
                <label class="form-check-label" for="PF">Física</label>
            </div>
            @else
            <div class="form-check">
                <input class="form-check-input" checked type="radio" name="tipo_prof" id="PJ" value="PJ">
                <label class="form-check-label" for="PJ">Jurídica</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_prof" id="PF" value="PF">
                <label class="form-check-label" for="PF">Física</label>
            </div>
            @endif

        </div>
        <div class="col-md-2">
            <label for="pis">PIS</label>
            <input type="text" class="form-control" id="pis" name="pis" maxlength="11" value="{{ $provider->pis }}">
        </div>
        <div class="col-md-2">
            <label for="data_nasc">Data de nascimento</label>
            <input type="date" class="form-control" id="data_nasc" name="data_nasc" value="{{ $provider->data_nasc }}">
        </div>
        <div class="col-md-2">
            <label for="cpf_cnpj">CPF/CNPJ</label>
            <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" maxlength="20" disabled
                value="{{ $provider->cpf_cnpj }}">
        </div>
        <div class="col-md-2">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="{{ $provider->cep }}">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-2">
            <label for="rua">Rua/Avenida</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $provider->endereco }}">
        </div>
        <div class="col-md-1">
            <label for="num_end">Num</label>
            <input type="text" class="form-control" id="num_end" name="num_end" value="{{ $provider->num_end }}">
        </div>
        <div class="col-md-2">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento"
                value="{{ $provider->complemento }}">
        </div>
        <div class="col-md-2">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="{{ $provider->bairro }}">
        </div>
        <div class="col-md-2">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $provider->cidade }}">
        </div>
        <div class="col-md-2">
            <label class="" for="nivel">Estado</label>

            <select class="custom-select" id="estado" name="estado">
                <option {{ $provider->estado == 'ac' ? 'selected' : '' }} value="ac">Acre</option>
                <option {{ $provider->estado == 'al' ? 'selected' : '' }} value="al">Alagoas</option>
                <option {{ $provider->estado == 'ap' ? 'selected' : '' }} value="ap">Amapá</option>
                <option {{ $provider->estado == 'am' ? 'selected' : '' }} value="am">Amazonas</option>
                <option {{ $provider->estado == 'ba' ? 'selected' : '' }} value="ba">Bahia</option>
                <option {{ $provider->estado == 'ce' ? 'selected' : '' }} value="ce">Ceará</option>
                <option {{ $provider->estado == 'df' ? 'selected' : '' }} value="df">Distrito Federal</option>
                <option {{ $provider->estado == 'es' ? 'selected' : '' }} value="es">Espírito Santo</option>
                <option {{ $provider->estado == 'go' ? 'selected' : '' }} value="go">Goiás</option>
                <option {{ $provider->estado == 'ma' ? 'selected' : '' }} value="ma">Maranhão</option>
                <option {{ $provider->estado == 'mt' ? 'selected' : '' }} value="mt">Mato Grosso</option>
                <option {{ $provider->estado == 'ms' ? 'selected' : '' }} value="ms">Mato Grosso do Sul</option>
                <option {{ $provider->estado == 'mg' ? 'selected' : '' }} value="mg">Minas Gerais</option>
                <option {{ $provider->estado == 'pa' ? 'selected' : '' }} value="pa">Pará</option>
                <option {{ $provider->estado == 'pb' ? 'selected' : '' }} value="pb">Paraíba</option>
                <option {{ $provider->estado == 'pr' ? 'selected' : '' }} value="pr">Paraná</option>
                <option {{ $provider->estado == 'pe' ? 'selected' : '' }} value="pe">Pernambuco</option>
                <option {{ $provider->estado == 'pi' ? 'selected' : '' }} value="pi">Piauí</option>
                <option {{ $provider->estado == 'rj' ? 'selected' : '' }} value="rj">Rio de Janeiro</option>
                <option {{ $provider->estado == 'rn' ? 'selected' : '' }} value="rn">Rio Grande do Norte</option>
                <option {{ $provider->estado == 'rs' ? 'selected' : '' }} value="rs">Rio Grande do Sul</option>
                <option {{ $provider->estado == 'ro' ? 'selected' : '' }} value="ro">Rondônia</option>
                <option {{ $provider->estado == 'rr' ? 'selected' : '' }} value="rr">Roraima</option>
                <option {{ $provider->estado == 'sc' ? 'selected' : '' }} value="sc">Santa Catarina</option>
                <option {{ $provider->estado == 'sp' ? 'selected' : '' }} value="sp">São Paulo</option>
                <option {{ $provider->estado == 'se' ? 'selected' : '' }} value="se">Sergipe</option>
                <option {{ $provider->estado == 'to' ? 'selected' : '' }} value=to>Tocantins</option>
            </select>
        </div>
        <div class="col-md-1">
            <label for="cnae">CNAE</label>
            <input type="text" class="form-control" id="cnae" name="cnae" maxlength="10" value="{{ $provider->cnae }}">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3">
            <label for="tipo_servico">Tipo de Serviço</label>
            <input type="text" class="form-control" id="tipo_servico" name="tipo_servico"
                value="{{ $provider->tipo_servico }}">
        </div>
        <div class="col-md-2">
            <label for="area">Área</label>
            <input type="text" class="form-control" id="area" name="area" maxlength="140" value="{{ $provider->area }}">
        </div>
        <div class="col-md-2">
            <label for="valor_bruto">Valor Bruto</label>
            <input type="text" class="form-control" id="valor_bruto" name="valor_bruto" value="{{ $provider->valor_bruto }}">
        </div>
        <div class="col-md-2">
            <label for="valor_liquido">Valor Liquido</label>
            <input type="text" class="form-control" id="valor_liquido" name="valor_liquido" value="{{ $provider->valor_liquido }}">
        </div>
        <div class="col-md-2">
            <label for="vencimento">Vencimento</label>
            <input type="date" class="form-control" id="vencimento" name="vencimento"
                value="{{ $provider->vencimento }}">
        </div>
        <div class="col-md-1">
            <label for="tipo_conta">Conta</label>

            @if ($provider->tipo_conta === 'Poupanca')
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_conta" id="corrente" value="Corrente">
                <label class="form-check-label" for="corrente">Corrente</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" checked type="radio" name="tipo_conta" id="poupanca" value="Poupanca">
                <label class="form-check-label" for="poupanca">Poupança</label>
            </div>
            @else
            <div class="form-check">
                <input class="form-check-input" checked type="radio" name="tipo_conta" id="corrente" value="Corrente">
                <label class="form-check-label" for="corrente">Corrente</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_conta" id="poupanca" value="Poupanca">
                <label class="form-check-label" for="poupanca">Poupança</label>
            </div>
            @endif

        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" maxlength="140"
                value="{{ $provider->email }}">
        </div>
        <div class="col-md-2">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" maxlength="11"
                value="{{ $provider->telefone }}">
        </div>
        <div class="col-md-2">
            <label for="banco_prof">Banco</label>
            <input type="text" class="form-control" id="banco_prof" name="banco_prof" maxlength="40"
                value="{{ $provider->banco_prof }}">
        </div>
        <div class="col-md-1">
            <label for="agencia">Agencia</label>
            <input type="text" class="form-control" id="agencia" name="agencia" value="{{ $provider->agencia }}">
        </div>
        <div class="col-md-1">
            <label for="digito">Digito</label>
            <input type="text" class="form-control" id="digito_agencia" name="digito_agencia"
                value="{{ $provider->digito_agencia }}">
        </div>
        <div class="col-md-2">
            <label for="conta">Conta Bancária</label>
            <input type="text" class="form-control" id="conta" name="conta" value="{{ $provider->conta }}">
        </div>
        <div class="col-md-1">
            <label for="digito">Digito</label>
            <input type="text" class="form-control" id="digito_conta" name="digito_conta"
                value="{{ $provider->digito_conta }}">
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col-md-2">
            <input type="submit" class="form-control btn btn-primary" value="Salvar Alterações">
        </div>
        <div class="col-md-2">
            <a class="form-control btn btn-danger" href="{{ route('provider.show') }}">Cancelar Alterações</a>
        </div>
    </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

@endsection