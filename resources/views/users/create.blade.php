@extends('layouts.mainbs')

@section('page-title')
Novo Usuário
@stop

@section('content')

@section('head')
Cadastro de Usuários
@stop

{!! Form::open( ['route' => ['usuarios.store']]) !!}
    @include('users.partials.form')
{!! Form::close()!!}    

<p>
    <a href="{{ route('usuarios.index') }}" >Voltar</a>
</p>

@stop