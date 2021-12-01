@extends('adminlte::page')

@section('title', 'AMLC')

@section('content_header')
    <h1>Crear nueva entidad</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.entities.store']) !!}

            @include('admin.entities.partials.form')

            {!! Form::submit('Crear Entidad', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
