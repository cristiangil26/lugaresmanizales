@extends('layouts.master')

@section('title','Registar Conductor')
@section('name','Registrar Conductor')
@section('content')

    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
    @endforeach
                </ul>
            </div>
    @endif
    {!! Form::open(['route'=>'conductor.store','method'=>'POST'])!!}
        <div class="form-group">
            {!! Form::label('nombre','Nombre')!!}
            {!!Form::text('nombre',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('apellidos','Apellidos',['class' => 'control-label'])!!}
            {!!Form::text('apellidos',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('cédula','Cédula')!!}
            {!!Form::text('cédula',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('teléfono','Teléfono')!!}
            {!!Form::text('teléfono',null,['class'=>'form-control'])!!}
        </div>
        
        <div class="form-group">
                <center>
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                    
                </center>
        </div>
        
    {!! Form::close()!!}
    
@endsection