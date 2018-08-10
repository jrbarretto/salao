<div class="row">
    <div class="col-md-6">   
        <div class="form-group">
            {!! Form::label('establishment_id','Adicionar Estabelecimento', array('class' => 'control-label')) !!}
            {!! Form::select('establishment_id',$establishments, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">Adicionar</button>
