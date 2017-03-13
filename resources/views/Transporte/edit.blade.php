@if(Auth::user())
@extends('layouts.master')
@section('title','Actualizar Ruta')
@section('name','Actualizar Ruta: '.$transporte->origen)
@section('content')

    {!! Form::open(['route'=>['transporte.update',$transporte],'method'=>'PUT'])!!}
        <div class="form-group">
            {!! Form::label('origen','Origen')!!}
            {!!Form::text('origen',$transporte->origen,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('destino','Destino',['class' => 'control-label'])!!}
            {!!Form::text('destino',$transporte->destino,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('nombreRuta','Nombre Ruta',['class' => 'control-label'])!!}
            {!!Form::text('nombreRuta',$transporte->nombreRuta,['class'=>'form-control'])!!}
        </div>
        
        <div class="form-group">
                <center>
            {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
                    
                </center>
        </div>
        
    {!! Form::close()!!}
    
@endsection 
@endif