@extends('layouts.app')

@section('title', 'Editar Usuários')

@section('content')

<form>
    <div class="form-row">
        <div class="col-md-3">
            <label for="nome_user">Nome</label>
            <input type="text" class="form-control" id="nome_user" name="nome_user" maxlength="140" required>
        </div>

        <div class="col-md-2">
            <label for="cpf_user">CPF</label>
            <input type="text" class="form-control" id="cpf_user" name="cpf_user" maxlength="11" required>
        </div>
        <div class="col-md-2">
            <label for="cpf_cnpj">Area</label>
            <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" required>
        </div>
        <div class="col-md-2">
            <label for="empresa_user">Empresa</label>
            <input type="text" class="form-control" id="empresa_user" name="empresa_user" required>
        </div>
        <div class="col-md-2">
            <label for="senha_user">Senha</label>
            <input type="password" class="form-control" id="senha_user" name="senha_user" required>
        </div>
        <div class="col-1 ">
            <label class="" for="nivel">Nível</label>
            <select class="custom-select" id="nivel">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
    </div>

    <br>
    <div class="form-row">
        <div class="col-md-2">
            <input type="submit" class="form-control btn btn-primary" value="Cadastrar">
        </div>
    </div>
</form>

@endsection