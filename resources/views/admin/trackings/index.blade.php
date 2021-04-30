@extends('adminlte::page')

@section('title', 'Sistema de Listas')

@section('content_header')
    <h1>Seguimiento de usuarios</h1>
@stop

@section('content')
    @livewire('admin-trackings')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
