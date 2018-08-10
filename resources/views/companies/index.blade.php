@extends('layouts.mainbs')

@section('page-title')
Cadastro de Companies
@stop

@section('content')

<h1> Companies </h1>
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

@stop