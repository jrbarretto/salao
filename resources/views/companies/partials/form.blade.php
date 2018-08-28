
<div class="row">
    <div class="col-md-6">   
        <div class="form-group">
            {!! Form::label('name','Nome', array('class' => 'control-label')) !!}
            {!! Form::text('name',null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6">   
        <div class="form-group">
            {!! Form::label('email','Email', array('class' => 'control-label')) !!}
            {!! Form::text('email',null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Salvar</button>