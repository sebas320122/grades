@extends('layouts.app') 
@section('content') 
  <style> 
    .margin { 
      margin-top: 40px; 
    } 
  </style> 
  <div class="margin"> 
    @if (session()->get('success')) 
      <div class="alert alert-success"> 
        {{ session()->get('success') }} 
      </div><br /> 
    @endif 
   
      <a class="btn btn-primary" href="{{ route('act.create') }}">Agregar</a> 
      <a href="{{ route('curso.index') }}" class="btn btn-primary">Regresar a cursos</a> 

    <table class="table table-striped"> 
      <thead> 
        <tr> 
          <th>Id</th> 
          <th>Tipo</th> 
          <th>Fecha</th> 
          <th>Calificacion</th> 
          <th width="80px"></th> 
          <th width="80px"></th> 
        </tr> 
      </thead> 
      <tbody> 
        @foreach ($acts as $act) 
          <tr> 
            <td><a href="{{ route('act.show', $act->id_act) }}">{{ $act->id_act }}</a></td> 
            <td><a href="{{ route('act.show', $act->id_act) }}">{{ $act->tipo }}</a></td> 
            <td><a href="{{ route('act.show', $act->id_act) }}">{{ $act->fecha }}</a></td>
            <td><a href="{{ route('act.show', $act->id_act) }}">{{ $act->calificacion }}</a></td>  
            <td><a href="{{ route('act.edit', $act->id_act) }}" class="btn btn-primary">Editar</a></td> 
            <td> 
              <form action="{{ route('act.destroy', $act->id_act) }}" method="post"> 
                @csrf 
                @method('DELETE') 
                <button class="btn btn-danger" type="submit">Eliminar</button> 
              </form> 
            </td> 
          </tr> 
        @endforeach 
      </tbody> 
    </table> 
  <div> 
@endsection 