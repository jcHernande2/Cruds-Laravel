@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Crear Articulo
        </h1>
    </section>
    <div class="content">
        @include('articulos.error')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'articulos.store']) !!}

                        @include('articulos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
