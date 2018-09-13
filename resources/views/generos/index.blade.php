@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Generos</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('generos.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        
       
       
        
        <div class="clearfix"></div>
        {{ Form::open(array('url' => 'generos','method' => 'get')) }}
        {{ Form::text('search')}}
        {{ Form::submit('buscar')}}
        {{ Form::close() }}
        <div class="clearfix"></div>
        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('generos.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

