
<div class="row">
    <div class="col-md-6">   
        <div class="form-group">
            {!! Form::label('name','Nome', array('class' => 'control-label')) !!}
            {!! Form::text('name',null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6">   
        <div class="form-group">
            {!! Form::label('email','E-mail', array('class' => 'control-label')) !!}
            {!! Form::text('email',null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">   
        <div class="form-group">
            {!! Form::label('usrtype_id','Tipo', array('class' => 'control-label')) !!}
            {!! Form::select('usrtype_id',$usrtypes, null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6">   
            <div class="form-group">
                @if(!count($user->establishments))
                {!! Form::label('company_id','Empresa', array('class' => 'control-label')) !!}
                {!! Form::select('company_id',$empresas, null, ['class' => 'form-control']) !!}
                @else
                {!! Form::label('company_id','Empresa', array('class' => 'control-label')) !!}
                {!! Form::text('', $user->company->name, ['class' => 'form-control', 'disabled' => "disabled"]) !!}
                @endif
            </div>
        </div>
</div>
<button type="submit" class="btn btn-primary">Salvar</button>