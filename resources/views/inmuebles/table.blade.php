<table class="table table-responsive" id="inmuebles-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Direccion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($inmuebles as $inmueble)
        <tr>
            <td>{!! $inmueble->Nombre !!}</td>
            <td>{!! $inmueble->Direccion !!}</td>
            <td>
                {!! Form::open(['route' => ['inmuebles.destroy', $inmueble->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('inmuebles.show', [$inmueble->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('inmuebles.edit', [$inmueble->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>