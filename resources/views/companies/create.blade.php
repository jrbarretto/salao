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

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <h1>Companies: Alteração</h1>
                    {!! Form::model($company, ['route' => ['companies.update', $company->id]]) !!}
                    
                    <input type="hidden" name="_method" value="PUT">
                    
                        @include('companies.partials.form')
                    {!! Form::close()!!}    
                    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

@stop