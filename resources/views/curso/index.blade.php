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
   
    
   

    <table class="table table-striped"> 
      <thead> 
        <tr> 
          <th>Id</th> 
          <th>Nombre del curso</th> 
          <th width="80px"></th> 
          <th width="80px"></th> 
        </tr> 
      </thead> 
      <tbody> 
        @foreach ($cursos as $curso) 
          <tr> 
            <td><a href="{{ route('curso.show', $curso->id_curso) }}">{{ $curso->id_curso }}</a></td> 
            <td><a href="{{ route('curso.show', $curso->id_curso) }}">{{ $curso->nom_curso }}</a></td> 
             
            <td> 

            </td> 
          </tr> 
        @endforeach 
      </tbody> 
    </table> 
  <div> 
@endsection 