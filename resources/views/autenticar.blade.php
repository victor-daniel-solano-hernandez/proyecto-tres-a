@extends('layouts.general')

@section('content')
    
    @if (session('error'))
    <div class="alert alert-danger" role="alert">
        {{session('error')}}
    </div>
    @endif
    
  
<form action = "/validar" method="post">
  @csrf
       
  <label for="" class="tituloSeccion">Nombre:</label>
  <input type="text" class="form-control formulario" name="usuario">
       
  <label for="" class="tituloSeccion">Contraseña:</label>
  <input type="password" class="form-control formulario" name="password">
               
  <button type="submit" class="btn btn-primary" value="enviar">Enviar</button>

</form>    
  @endsection

  

  