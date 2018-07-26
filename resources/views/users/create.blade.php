@extends('layouts.mainbs')

@section('page-title')
Novo Usuário
@stop

@section('content')


<h1>Novo Usuários</h1>
{!! Form::open( ['route' => ['usuarios.store']]) !!}
    @include('users.partials.form')
{!! Form::close()!!}    

<p>
    <a href="{{ route('usuarios.index') }}" >Voltar</a>
</p>

@stop