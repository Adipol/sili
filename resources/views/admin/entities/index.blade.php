@extends('adminlte::page')

@section('title', 'AMLC')

@section('content_header')
    <h1>Lista de entidades</h1>
@stop

@section('content')
    <div class="card-header">
        <a href="{{ route('admin.entities.create') }}">Crear entidad</a>
    </div>
    @livewire('admin-entities')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
