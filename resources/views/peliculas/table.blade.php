<table class="table table-responsive" id="peliculas-table">
    <thead>
        <tr>
            <th>Archivo</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Idtipoarticulo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($peliculas as $peliculas)
        <tr>
            <td>{!! $peliculas->archivo !!}</td>
            <td>{!! $peliculas->titulo !!}</td>
            <td>{!! $peliculas->descripcion !!}</td>
            <td>{!! $peliculas->tipoArticulos->Nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['peliculas.destroy', $peliculas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('peliculas.show', [$peliculas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('peliculas.edit', [$peliculas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>