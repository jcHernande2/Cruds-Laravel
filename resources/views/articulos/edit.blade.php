@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Genero
        </h1>
   </section>
   <div class="content">
       @include('articulos.error')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($articulo, ['route' => ['articulos.update', $articulo->id], 'method' => 'patch']) !!}

                        @include('articulos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection