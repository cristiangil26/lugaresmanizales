@if(Auth::user())
@extends('layouts.master')

@section('title','Registar Ruta')
@section('name','Registrar Ruta')
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
    {!! Form::open(['route'=>'transporte.store','method'=>'POST'])!!}
        <div class="form-group">
            {!! Form::label('origen','Origen')!!}
            {!!Form::text('origen',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('destino','Destino',['class' => 'control-label'])!!}
            {!!Form::text('destino',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('nombreRuta','Nombre Ruta',['class' => 'control-label'])!!}
            {!!Form::text('nombreRuta',null,['class'=>'form-control'])!!}
        </div>
        
        
        <div class="form-group">
                <center>
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                    
                </center>
        </div>
    
        
    {!! Form::close()!!}
    
@endsection
@endif