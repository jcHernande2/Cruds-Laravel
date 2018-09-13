<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $inmueble->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('Nombre', 'Nombre:') !!}
    <p>{!! $inmueble->Nombre !!}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('Direccion', 'Direccion:') !!}
    <p>{!! $inmueble->Direccion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $inmueble->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $inmueble->updated_at !!}</p>
</div>

