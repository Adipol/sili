@extends('adminlte::page')

@section('title', 'AMLC')

@section('content_header')
    <h1>Lista de usuarios</h1>
@stop

@section('content')
    <div class="card-header">
        <a href="{{ route('admin.users.create') }}">Crear usuario</a>
    </div>
    @livewire('admin-users')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
