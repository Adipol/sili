 <div class="form-group">
     {!! Form::label('name', 'Nombre: ') !!}
     {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Escriba un nombre']) !!}
     @error('name')
         <span class="invalid-feedback">
             <strong>{{ $message }}</strong>
         </span>
     @enderror

     {!! Form::label('email', 'Email: ') !!}
     {!! Form::text('email', null, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Escriba un email']) !!}

     @error('email')
         <span class="invalid-feedback">
             <strong>{{ $message }}</strong>
         </span>
     @enderror

     {!! Form::label('entity', 'Entidad: ') !!}
     {{ Form::select('entity', $entities, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una entidad']) }}
     @error('entity')
         <span class="invalid-feedback">
             <strong>{{ $message }}</strong>
         </span>
     @enderror

 </div>
