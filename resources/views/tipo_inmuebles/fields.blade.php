<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nombre', 'Nombre:') !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Descripcion', 'Descripcion:') !!}
    {!! Form::text('Descripcion', "", ['class' => 'form-control']) !!}
</div>

<!-- Estatus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Estatus', 'Estatus:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('Estatus', 0) !!}
        {!! Form::checkbox('Estatus', '1', true) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipoInmuebles.index') !!}" class="btn btn-default">Cancel</a>
</div>
