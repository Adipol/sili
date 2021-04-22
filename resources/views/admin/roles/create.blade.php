@extends('adminlte::page')

@section('title', 'Sistema de Listas')

@section('content_header')
    <h1>Crear nuevo rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre: ') !!}
                {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Escriba un nombre']) !!}
                @error('name')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <strong>Permisos</strong>

            @foreach ($permissions as $permission)
                <div>
                    <label>
                        {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                        {{ $permission->name }}
                    </label>
                </div>
            @endforeach

            @error('permissions')
                <small class="text-danger">
                    <strong>{{ $message }}</strong>
                </small>
                <br>
            @enderror

            {!! Form::submit('Crear rol', ['class' => 'btn btn-primary mt-2']) !!}

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
