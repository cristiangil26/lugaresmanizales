@extends('layouts.master')
@section('title','Actualizar Conductor')
@section('name','Actualizar Conductor: '.$conductor->nombre)
@section('content')

    {!! Form::open(['route'=>['conductor.update',$conductor],'method'=>'PUT'])!!}
        <div class="form-group">
            {!! Form::label('nombre','Nombre')!!}
            {!!Form::text('nombre',$conductor->nombre,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('apellidos','Apellidos',['class' => 'control-label'])!!}
            {!!Form::text('apellidos',$conductor->apellidos,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('cédula','Cédula')!!}
            {!!Form::text('cédula',$conductor->cédula,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('teléfono','Teléfono')!!}
            {!!Form::text('teléfono',$conductor->teléfono,['class'=>'form-control'])!!}
        </div>
        
        <div class="form-group">
                <center>
            {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
                    
                </center>
        </div>
        
    {!! Form::close()!!}
    
@endsection 