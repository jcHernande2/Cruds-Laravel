<li class="{{ Request::is('generos*') ? 'active' : '' }}">
    <a href="{!! route('generos.index') !!}"><i class="fa fa-edit"></i><span>Generos</span></a>
</li>
<li class="accordion">
    <a href="#"><i class="fa fa-edit"></i><span>Catalogos</span></a>
    <ul>
        <li class="{{ Request::is('tipoInmuebles*') ? 'active' : '' }}">
            <a href="{!! route('tipoInmuebles.index') !!}"><i class="fa fa-edit"></i><span>Tipo Inmuebles</span></a>
        </li>

        <li class="{{ Request::is('inmuebles*') ? 'active' : '' }}">
            <a href="{!! route('inmuebles.index') !!}"><i class="fa fa-edit"></i><span>Inmuebles</span></a>
        </li>

        <li class="{{ Request::is('tipoArticulos*') ? 'active' : '' }}">
            <a href="{!! route('tipoArticulos.index') !!}"><i class="fa fa-edit"></i><span>Tipo Articulos</span></a>
        </li>

        <li class="{{ Request::is('peliculas*') ? 'active' : '' }}">
            <a href="{!! route('peliculas.index') !!}"><i class="fa fa-edit"></i><span>Peliculas</span></a>
        </li>
    </ul>
</li>

<li class="{{ Request::is('espacios*') ? 'active' : '' }}">
    <a href="{!! route('espacios.index') !!}"><i class="fa fa-edit"></i><span>Espacios</span></a>
</li>
<li class="{{ Request::is('articulos*') ? 'active' : '' }}">
    <a href="{!! route('articulos.index') !!}"><i class="fa fa-edit"></i><span>Articulos</span></a>
</li>


