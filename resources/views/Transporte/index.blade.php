
@extends('layouts.master')

@section('title','Lista de Rutas')
@section('name','Lista Rutas')
@section('content')
@if(Auth::user())
<a href="{{route('transporte.create')}}" class="btn btn-info">Registrar Nueva Ruta</a><hr>
@endif
    <table class="table table-striped">
        <thead>
            <th> ID</th>
            <th> ORIGEN</th>
            <th>DESTINO</th>
            <th>Nombre Ruta</th>
            <th>Acción</th>
            
        </thead>
        <tbody>
            @foreach($transporte as $transportes)
                <tr>
                    <td>{{$transportes->id}}</td>
                    <td>{{$transportes->origen}}</td>
                    <td>{{$transportes->destino}}</td>
                    <td>{{$transportes->nombreRuta}}</td>
                    <td>
                        @if(Auth::user())
                        {!! Form::open([ 'method' => 'DELETE',
    'route' => ['transporte.destroy', $transportes->id]
]) !!}
    {!! Form::submit('Borrar Ruta', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
                        
                        <a href="{{route('transporte.edit',$transportes->id)}}"class="btn-warning btn-md"><span class="glyphicon glyphicon-wrench" aria-hidden="true" ></span></a>
                        @endif
                    </td>
                   
                </tr>
            @endforeach
            <a class="btn btn-default" href="https://www.google.com/maps/d/viewer?mid=1bYQ5I8g0k4fE2PcZKDe1yK5aZlg&ll=5.049669329805016%2C-75.5147&z=13" role="button">Mapa de las Rutas</a>
        </tbody>
    </table>
    {!!$transporte->render()!!}
@endsection
