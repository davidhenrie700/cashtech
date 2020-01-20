@extends('layouts.app')

@section('title', 'Editar Serviços')

@section('content')

<form method="POST" action="{{ route('service.update', compact('service')) }}" id="form-service">
  @csrf
  @method('PUT')
  <div class="form-row">
    <div class="col-md-3">
      <label for="nome_servico">Nome</label>
      <input type="text" class="form-control" id="servicos" name="servicos" maxlength="140" required
        value="{{ $service->servicos }}">
    </div>

    <div class="col-md-2">
      <label for="valor">Valor</label>
        <input type="text" class="form-control" id="valor" name="valor" required value="{{ $service->valor }}">
    </div>

  </div>

  <br>
  <div class="form-row">
    <div class="col-md-2">
      <input type="submit" class="form-control btn btn-primary" value="Salvar Alterações">
    </div>
    <div class="col-md-2">
      <a class="form-control btn btn-danger" href="{{ route('service.index') }}">Cancelar Alterações</a>
    </div>
  </div>
</form>

@endsection
