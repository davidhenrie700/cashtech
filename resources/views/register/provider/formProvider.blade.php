@extends('alerts.alertCad')
@extends('layouts.app')

@section('title', 'Cadastrar Profissional')
@section('content')

<form method="POST" action="{{ route('provider.store') }}" id="form-provider">

    @csrf
    <div class="form-row">
        <div class="col-md-3">
            <label for="nome">Nome/Razão Social</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: João da Silva">
        </div>
        <div class="col-md-1">
            <label for="tipo_prof">Pessoa</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_prof" id="PJ" value="PJ">
                <label class="form-check-label" for="PJ">Jurídica</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_prof" id="PF" value="PF">
                <label class="form-check-label" for="PF">Física</label>
            </div>
        </div>
        <div class="col-md-2">
            <label for="pis">PIS</label>
            <input type="text" class="form-control" id="pis" name="pis" maxlength="11" placeholder="xxx.xxxxxx.xx-xx">
        </div>
        <div class="col-md-2">
            <label for="data_nasc">Data de nascimento</label>
            <input type="date" class="form-control" id="data_nasc" name="data_nasc">
        </div>
        <div class="col-md-2">
            <label for="cpf_cnpj">CPF/CNPJ</label>
            <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" placeholder="xx.xxx.xxx/xxxx-xx">
        </div>
        <div class="col-md-2">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="xxxxx-xxx">
        </div>
    </div>
    <div class="form-row mt-2">
        <div class="col-md-2">
            <label for="rua">Rua/Avenida</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Ex: Rua João...">
        </div>
        <div class="col-md-1">
            <label for="num_end">Num</label>
            <input type="text" class="form-control" id="num_end" name="num_end" placeholder="xx">
        </div>
        <div class="col-md-2">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Ex: Apt 33, Bloco 2">
        </div>
        <div class="col-md-2">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Ex: Bairro Laranja">
        </div>
        <div class="col-md-2">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Ex: Jardins">
        </div>
        <div class="col-md-2">
            <label class="" for="nivel">Estado</label>
            <select class="custom-select" id="estado" name="estado">
                <option value="" selected>Selecione</option>
                <option value="ac">Acre</option>
                <option value="al">Alagoas</option>
                <option value="ap">Amapá</option>
                <option value="am">Amazonas</option>
                <option value="ba">Bahia</option>
                <option value="ce">Ceará</option>
                <option value="df">Distrito Federal</option>
                <option value="es">Espírito Santo</option>
                <option value="fo">Goiás</option>
                <option value="ma">Maranhão</option>
                <option value="mt">Mato Grosso</option>
                <option value="ms">Mato Grosso do Sul</option>
                <option value="mg">Minas Gerais</option>
                <option value="pa">Pará</option>
                <option value="pb">Paraíba</option>
                <option value="pr">Paraná</option>
                <option value="pe">Pernambuco</option>
                <option value="pi">Piauí</option>
                <option value="rj">Rio de Janeiro</option>
                <option value="rn">Rio Grande do Norte</option>
                <option value="rs">Rio Grande do Sul</option>
                <option value="ro">Rondônia</option>
                <option value="rr">Roraima</option>
                <option value="sc">Santa Catarina</option>
                <option value="sp">São Paulo</option>
                <option value="se">Sergipe</option>
                <option value=to>Tocantins</option>
            </select>
        </div>
        <div class="col-md-1">
            <label for="cnae">CNAE</label>
            <input type="text" class="form-control" id="cnae" name="cnae" maxlength="10">
        </div>
    </div>
    <div class="form-row mt-2">
        <div class="col-md-3">
            <label for="tipo_servico">Tipo de Serviço</label>
            <input type="text" class="form-control" id="tipo_servico" name="tipo_servico">
        </div>
        <div class="col-md-2">
            <label for="area">Área</label>
            <input type="text" class="form-control" id="area" name="area" maxlength="140">
        </div>
        <div class="col-md-2">
            <label for="valor_bruto">Valor Bruto</label>
            <input type="text" class="form-control" id="valor_bruto" name="valor_bruto" maxlength="20">
        </div>
        <div class="col-md-2">
            <label for="valor_liquido">Valor Liquido</label>
            <input type="text" class="form-control" id="valor_liquido" name="valor_liquido" maxlength="20">
        </div>
        <div class="col-md-2">
            <label for="vencimento">Vencimento</label>
            <input type="date" class="form-control" id="vencimento" name="vencimento">
        </div>
        <div class="col-md-1">
            <label for="tipo_conta">Conta</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_conta" id="corrente" value="Corrente">
                <label class="form-check-label" for="corrente">Corrente</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_conta" id="poupanca" value="Poupanca">
                <label class="form-check-label" for="poupanca">Poupança</label>
            </div>
        </div>
    </div>
    <div class="form-row mt-2">
        <div class="col-md-3">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" maxlength="140">
        </div>
        <div class="col-md-2">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone">
        </div>
        <div class="col-md-2">
            <label for="banco_prof">Banco</label>
            <input type="text" class="form-control" id="banco_prof" name="banco_prof" maxlength="40">
        </div>
        <div class="col-md-1">
            <label for="agencia">Agencia</label>
            <input type="text" class="form-control" id="agencia" name="agencia">
        </div>
        <div class="col-md-1">
            <label for="digito">Digito</label>
            <input type="text" class="form-control" id="digito_agencia" name="digito_agencia">
        </div>
        <div class="col-md-2">
            <label for="conta">Conta Bancária</label>
            <input type="text" class="form-control" id="conta" name="conta">
        </div>
        <div class="col-md-1">
            <label for="digito">Digito</label>
            <input type="text" class="form-control" id="digito_conta" name="digito_conta">
        </div>
    </div>
    <div class="form-row justify-content-center mt-3">
        <div class="col-md-2">
            <input type="submit" class="form-control btn btn-primary" value="Cadastrar" id="cadastrar">
        </div>
        <div class="col-md-2">
            <input type="reset" class="form-control btn btn-primary" value="Limpar">
        </div>
    </div>
</form>

<table id="profissionais" class="table table-sm table-hover">
    <h5 class="text-center">Profissionais</h5>
    <thead class="thead-dark bg-dark">
        <tr>
            <th scope="col" width="60%">Nome</th>
            <th scope="col" width="25%">CNPJ</th>
            <th scope="col" width="15%">Ação</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($providers as $provider)
        <tr>
            <td>{{ $provider->nome }}</td>
            <td>{{ $provider->cpf_cnpj }}</td>
            <td>
                <form action="{{ route('provider.showEdit', [ 'provider' => $provider->id]) }}" method="get">
                    <div class="col-10">
                        <button type="submit" class="form-control btn btn-primary btn-sm">Editar</button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>


@endsection