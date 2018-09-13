@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Inmueble
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tipoInmuebles.store']) !!}

                        @include('tipo_inmuebles.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
