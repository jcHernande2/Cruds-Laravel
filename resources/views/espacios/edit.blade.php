@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Espacio
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($espacio, ['route' => ['espacios.update', $espacio->id], 'method' => 'patch']) !!}

                        @include('espacios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection