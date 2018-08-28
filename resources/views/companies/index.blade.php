@extends('layouts.mainbs')

@section('page-title')
Cadastro de Empresas
@stop

@section('content')

<h1> Empresas </h1>
<!-- Button trigger modal -->

<div>
    <p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#companyCreateModal">
  Nova Empresa
</button>
</P>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Establishments</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($companies as $company)
    
        <tr>
            <td>{{ $company->id}} </td>
            <td>{{ $company->present()->shortName}} </td>
            <td>
            @foreach($company->establishments as $estab)
            | {{ $estab->name}}
            @endforeach
            </td>
            <td>
                <a href="{{ route('companies.edit',$company->id)}}" class="btn btn-sm btn-primary">Editar</a>
                <a href="{{ route('companies.destroy',$company->id)}}" class="btn btn-sm btn-secondary">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@include('companies.partials.createModal');


@stop