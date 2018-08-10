@extends('layouts.mainbs')

@section('page-title')
Alteração de Usuários
@stop

@section('content')

@section('head')
Alteração de Usuários
@stop

{!! Form::model($user, ['route' => ['usuarios.update', $user->id]]) !!}

<input type="hidden" name="_method" value="PUT">

    @include('users.partials.form')

{!! Form::close()!!}    

<p>
    <a href="{{ route('usuarios.index') }}" >Voltar</a>
</p>


@stop