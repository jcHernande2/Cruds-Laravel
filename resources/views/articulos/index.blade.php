@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Articulos</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('articulos.create') !!}">Agregar Nuevo</a>
        </h1>
    </section>
    <div class="content">
        
       
       
        
        <div class="clearfix"></div>
        {{ Form::open(array('url' => 'articulos','method' => 'get')) }}
        <div class="form-group col-sm-4">
        {{Form::select('tipo_articulos_id[]',$tipo_articulos,0, ['class' => 'form-control'])}}
        </div>
        <div class="form-group col-sm-4">
        {{ Form::text('search','',array_merge(['class' => 'form-control']))}}
        </div>
        <div class="form-group col-sm-4">
        {{ Form::submit('buscar')}}
        </div>
        {{ Form::close() }}
        <div class="clearfix"></div>
        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('articulos.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

