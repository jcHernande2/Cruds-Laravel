<table class="table table-responsive" id="tipoInmuebles-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Descripcion</th>
        <th>Estatus</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoInmuebles as $tipoInmueble)
        <tr>
            <td>{!! $tipoInmueble->Nombre !!}</td>
            <td>{!! $tipoInmueble->Descripcion !!}</td>
            <td>{!! $tipoInmueble->Estatus !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoInmuebles.destroy', $tipoInmueble->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoInmuebles.show', [$tipoInmueble->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoInmuebles.edit', [$tipoInmueble->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>