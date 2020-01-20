@extends('alerts.modalService')
@extends('alerts.alertCad')
@extends('layouts.app')

@section('title', 'Cadastrar Serviços')

@section('content')

<form method="POST" action="{{ route('service.store') }}" id="form-service">
    @csrf
    <div class="form-row">
        <div class="col-md-3">
            <label for="nome_servico">Nome</label>
            <input type="text" class="form-control" id="servicos" name="servicos" maxlength="140">
        </div>
        
        <div class="col-md-2">
            <label for="valor_servico">Valor</label>
            <input type="text" class="form-control" id="valor" name="valor">
        </div>
        
    </div>
    
    <br>
    <div class="form-row">
        <div class="col-md-2">
            <input type="submit" class="form-control btn btn-primary" value="Cadastrar">
        </div>
    </div>
</form>
<br>
<table id="example" class="table" style="width:100%">
    <thead class="thead-dark bg-dark">
        <tr>
            <th scope="col" width="55%">Serviço</th>
            <th scope="col" width="22%">Valor</th>
            <th scope="col" width="21%">Ação</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($services as $service)
        <tr>
                <td>{{ $service->servicos }}</td>
                <td class="teste">{{ $service->valor }}</td>
                <td>
                    <div class="row">
                        <form action="{{ route('service.edit', [ 'service' => $service->id]) }}" method="get">
                            <div class="col-12">
                                <button type="submit" class="form-control btn btn-primary">Editar <i class="fa fa-edit">
                                    </i></button>
                            </div>
                        </form>
                        <div class="col-6">
                            <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$service->id}})" 
                                data-target="#DeleteModal" class="btn btn-xs btn-danger">Excluir <i class="fa fa-trash"></i></a>
                        </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection