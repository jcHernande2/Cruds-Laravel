<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $peliculas->id !!}</p>
</div>

<!-- Archivo Field -->
<div class="form-group">
    {!! Form::label('archivo', 'Archivo:') !!}
    <p>{!! $peliculas->archivo !!}</p>
</div>

<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{!! $peliculas->titulo !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $peliculas->descripcion !!}</p>
</div>

<!-- Idtipoarticulo Field -->
<div class="form-group">
    {!! Form::label('idTipoArticulo', 'Idtipoarticulo:') !!}
    <p>{!! $peliculas->idTipoArticulo !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $peliculas->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $peliculas->updated_at !!}</p>
</div>

