@extends('layouts.master')

@section('title','Lista de Conductores')
@section('name','Lista Conductores')
@section('content')

<a href="{{route('conductor.create')}}" class="btn btn-info">Registrar Nuevo Conductor</a><hr>
    <table class="table table-striped">
        <thead>
            <th> ID</th>
            <th> NOMBRE</th>
            <th>APELLIDOS</th>
            <th>CÉDULA</th>
            <th>TELÉFONO</th>
        </thead>
        <tbody>
            @foreach($conductor as $conductores)
                <tr>
                    <td>{{$conductores->id}}</td>
                    <td>{{$conductores->nombre}}</td>
                    <td>{{$conductores->apellidos}}</td>
                    <td>{{$conductores->cédula}}</td>
                    <td>{{$conductores->teléfono}}</td>
                    <td>
                        {!! Form::open([ 'method' => 'DELETE',
    'route' => ['conductor.destroy', $conductores->id]
]) !!}
    {!! Form::submit('Borrar Conductor', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
                        
                        <a href="{{route('conductor.edit',$conductores->id)}}"class="btn-warning btn-md"><span class="glyphicon glyphicon-wrench" aria-hidden="true" ></span></a>
                        
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
    {!!$conductor->render()!!}
@endsection