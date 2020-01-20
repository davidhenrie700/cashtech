@extends('alerts.alertCad')
@extends('layouts.app')

@section('title', 'Cadastrar Usuários')
    
@section('content')

<form method="POST" action="{{ route('user.store') }}">
    @csrf
    <div class="form-row">
        <div class="col-md-3">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" maxlength="140" >
        </div>

        <div class="col-md-2">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" maxlength="11" >
        </div>
        <div class="col-md-2">
            <label for="area">Area</label>
            <input type="text" class="form-control" id="area" name="area" >
        </div>
        <div class="col-md-2">
            <label for="empresa">Empresa</label>
            <input type="text" class="form-control" id="empresa" name="empresa" >
        </div>
        <div class="col-md-2">
            <label for="senha_user">Senha</label>
            <input type="password" class="form-control" id="senha_user" name="senha_user" >
        </div>
        <div class="col-1 ">
            <label class="" for="nivel">Nível</label>
            <select class="custom-select" id="nivel" name="nivel">
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