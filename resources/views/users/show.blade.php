@extends('layouts.mainbs')

@section('page-title')
Detalhes de Usuários
@stop

@section('content')

@section('head')
Detalhes do Usuários
@stop

<div class="row">
    <div class="col-md-6">   
        <div class="form-group">
            Nome: {{ $user->name }}
        </div>
    </div>
</div>    
<div class="row">
    <div class="col-md-6">   
        <div class="form-group">
            E-mail: {{ $user->email }}
        </div>
    <div>
</div>
<div class="row">
    <div class="col-md-6">   
        <div class="form-group">
            Tipo: {{ $user->usrType->name }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">   
        <div class="form-group">
            Empresa:<B> {{ $user->company->name }} </B>
        </div>
    </div>
</div>

<h3>Estabelecimentos</h3>    

@include('establishments.partials.list',['estabsData' => $user->establishments])

{!! Form::open(['method' => 'post', 'route' => ['usuarios.establishment.add']] ) !!}
<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="user_id" value="{{$user->id}}">
    @include('establishments.partials.form')
{!! Form::close()!!}   

<p>
    <a href="{{ route('usuarios.index') }}" >Voltar</a>
</p>


@stop