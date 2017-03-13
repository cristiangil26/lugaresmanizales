@extends('layouts.master')

@section('title','Lista de Empresas')
@section('name','Lista Empresas')
@section('content')
@if(Auth::user())
<a href="{{route('empresa.create')}}" class="btn btn-info">Registrar Nueva Empresa</a><hr>
@endif
    <table class="table table-striped">
        <thead>
            <th> ID</th>
            <th> NOMBRE</th>
            <th>DIRECCIÓN</th>
            <th>TELÉFONO</th>
        </thead>
        <tbody>
            @foreach($empresa as $empresas)
                <tr>
                    <td>{{$empresas->id}}</td>
                    <td>{{$empresas->nombre}}</td>
                    <td>{{$empresas->direccion}}</td>
                    <td>{{$empresas->telefono}}</td>
                    <td>
                        @if(Auth::user())
                        {!! Form::open([ 'method' => 'DELETE',
    'route' => ['empresa.destroy', $empresas->id]
]) !!}
    {!! Form::submit('Borrar Empresa', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
                        
                        <a href="{{route('empresa.edit',$empresas->id)}}"class="btn-warning btn-md"><span class="glyphicon glyphicon-wrench" aria-hidden="true" ></span></a>
                        @endif
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
    {!!$empresa->render()!!}
@endsection