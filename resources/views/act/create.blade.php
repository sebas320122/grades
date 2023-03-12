@extends('layouts.app') 
@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Agregar actividad 
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
      <form method="post" action="{{ route('act.store') }}"> 
        @csrf 
        <div class="form-group"> 
          <label for="tipo">Tipo:</label> 
          <input type="text" class="form-control" name="tipo" /> 
        </div> 
        <div class="form-group"> 
          <label for="fecha">Fecha:</label> 
          <input type="text" class="form-control" name="fecha" /> 
        </div> 
        <div class="form-group"> 
          <label for="calificacion">Calificacion:</label> 
          <input type="text" class="form-control" name="calificacion" /> 
        </div> 
        <div class="form-group"> 
          <label for="id_curso">Id del curso:</label> 
          <input type="number" class="form-control" name="id_curso" /> 
        </div> 
        
        <button type="submit" class="btn btn-primary">Guardar</button> 
        <a href="{{ route('act.index') }}" class="btn btn-primary">Regresar</a> 
      </form> 
    </div> 
  </div> 
@endsection 