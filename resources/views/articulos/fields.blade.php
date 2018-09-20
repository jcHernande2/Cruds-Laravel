<!-- Tipo Articulo  Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoArticulos', 'Tipo Articulo:') !!}
    {!! Form::select('TipoArticulos',$tipo_articulos,(isset($articulo->idTipo))?(($articulo->idTipo)?$articulo->idTipo:0):0, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nombre', 'Nombre:') !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Descripcion', 'Descripcion:') !!}
    {!! Form::text('Descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('articulos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
