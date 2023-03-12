@extends('layouts.app') 

@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Ver datos 
    </div> 

    <div class="card-body"> 
      @if ($errors->any()) 
        <div class="alert alert-danger"> 
          <ul> 
            @foreach ($errors->all() as $error) 
              <li>{{ $error }}</li> 
            @endforeach 
          </ul> 
        </div><br /> 
      @endif 

      <div class="form-group"> 
        <label for="tipo">Tipo:</label> 
        <input type="text" class="form-control" name="tipo" value="{{ $act->tipo }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="fecha">Fecha:</label> 
        <input type="text" class="form-control" name="fecha" value="{{ $act->fecha }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="calificacion">Calificacion:</label> 
        <input type="text" class="form-control" name="calificacion" value="{{ $act->calificacion }}" disabled /> 
      </div> 
      
      <a href="{{ route('act.edit', $act->id_act) }}" class="btn btn-primary">Editar</a> 
      <a href="{{ route('act.index') }}" class="btn btn-primary">Regresar</a> 
    </div> 
  </div> 
@endsection 