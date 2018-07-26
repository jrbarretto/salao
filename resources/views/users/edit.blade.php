@extends('layouts.mainbs')

@section('page-title')
Alteração de Usuários
@stop

@section('content')

<h1>Usuários: Alteração</h1>
{!! Form::model($user, ['route' => ['usuarios.update', $user->id]]) !!}

<input type="hidden" name="_method" value="PUT">

    @include('users.partials.form')
{!! Form::close()!!}    

<p>
    <a href="{{ route('usuarios.index') }}" >Voltar</a>
</p>

@stop