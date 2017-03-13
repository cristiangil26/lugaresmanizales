@if(Auth::user())
@extends('layouts.master')

@section('title','Registar Empresa')
@section('name','Registrar Empresa')
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
    {!! Form::open(['route'=>'empresa.store','method'=>'POST'])!!}
        <div class="form-group">
            {!! Form::label('nombre','Nombre')!!}
            {!!Form::text('nombre',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('direccion','Dirección',['class' => 'control-label'])!!}
            {!!Form::text('direccion',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('telefono','Teléfono')!!}
            {!!Form::text('telefono',null,['class'=>'form-control'])!!}
        </div>
        
        <div class="form-group">
                <center>
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                    
                </center>
        </div>
        
    {!! Form::close()!!}
    
@endsection
@endif