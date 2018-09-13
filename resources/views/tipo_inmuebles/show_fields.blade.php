<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $tipoInmueble->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('Nombre', 'Nombre:') !!}
    <p>{!! $tipoInmueble->Nombre !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('Descripcion', 'Descripcion:') !!}
    <p>{!! $tipoInmueble->Descripcion !!}</p>
</div>

<!-- Estatus Field -->
<div class="form-group">
    {!! Form::label('Estatus', 'Estatus:') !!}
    <p>{!! $tipoInmueble->Estatus !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $tipoInmueble->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $tipoInmueble->updated_at !!}</p>
</div>

