@extends('layouts.mainbs')

@section('page-title')
Cadastro de Usuários
@stop

@section('content')

<h1> Usuários </h1>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Establishments</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
    
        <tr>
            <td>{{ $user->id}} </td>
            <td>{{ $user->name}} </td>
            <td>{{ $user->email}} </td>
            <td>{{ $user->usrType->name}} </td>
            <td>
            @foreach($user->establishments as $estab)
            | {{ $estab->name}}
            @endforeach
            </td>
            <td>
            {!! Form::open(['method' => 'DELETE', 'route' => ['usuarios.destroy', $user->id],'onsubmit' => 'return confirm("Confirma a Exclusão?")', 'id'=>'himan']) !!}
                <a href="{{ route('usuarios.edit',$user->id)}}" class="btn btn-sm btn-primary">Editar</a>
            {!! Form::submit('Excluir',['class' => 'btn btn-sm btn-secondary']) !!}
            {!! Form::close() !!}                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop