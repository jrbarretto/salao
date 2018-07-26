@extends('layouts.mainbs')

@section('page-title')
Alteração de Companies
@stop

@section('content')


<h1>Companies: Alteração</h1>
{!! Form::model($company, ['route' => ['companies.update', $company->id]]) !!}

<input type="hidden" name="_method" value="PUT">

    @include('companies.partials.form')
{!! Form::close()!!}    

<p>
    <a href="{{ route('companies.index') }}" >Voltar</a>
</p>

@stop