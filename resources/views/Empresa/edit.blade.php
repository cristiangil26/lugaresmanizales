@if(Auth::user())
@extends('layouts.master')
@section('title','Actualizar Empresa')
@section('name','Actualizar Empresa: '.$empresa->nombre)
@section('content')

    {!! Form::open(['route'=>['empresa.update',$empresa],'method'=>'PUT'])!!}
        <div class="form-group">
            {!! Form::label('nombre','Nombre')!!}
            {!!Form::text('nombre',$empresa->nombre,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('direccion','Dirección',['class' => 'control-label'])!!}
            {!!Form::text('direccion',$empresa->direccion,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('telefono','Télefono')!!}
            {!!Form::text('telefono',$empresa->telefono,['class'=>'form-control'])!!}
        </div>
        
        
        <div class="form-group">
                <center>
            {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
                    
                </center>
        </div>
        
    {!! Form::close()!!}
    
@endsection 
@endif