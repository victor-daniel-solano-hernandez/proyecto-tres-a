@extends('layouts.general')

@section('content')
<style>
  .containerTitle{
    /* Manipula la distancia de abajo entre un titulo y otro */
    padding-bottom: 80px;
  }
  .titulo{
    /* Manipula el tamaño de letra */
    font-size: 40px;
  }
  .tituloSeccion{
    font-size: 25px;
    font-weight: 100;
  }
  .formulario{
    border-radius: 20px;
  }

</style>

<div class="containerTitle">
  <h1 class ='titulo'>Agregar usuarios</label>
</div>

<form action="/Usuarios/{{$usuarios->id}}" method="POST">
    @csrf      
      <label for="nombre" class="tituloSeccion">Nombre del usuarios:</label>
      <input id="nombre" type="text" class="form-control formulario" name="nombre" value="{{$usuarios->nombre}}" disabled>

      <label for="a_paterno" class="tituloSeccion">Apellido paterno del usuario:</label>
      <input id="a_paterno" type="text" class="form-control formulario" name="a_paterno" value="{{$usuarios->a_paterno}}" disabled>

      <label for="a_materno" class="tituloSeccion">Apellido materno del usuario:</label>
      <input id="a_materno" type="text" class="form-control formulario" name="a_materno" value="{{$usuarios->a_materno}}" disabled>

      <label for="imagen" class="tituloSeccion">Imagen del usuario:</label>
      <input id ="imagen" type="file" class="form-control formulario" name="a_materno" value="{{$usuarios->imagen}}" disabled>  

      <div class="form-group">
          <label for="rol">Tipo de usuario</label>
          <select name="rol" id="rol">
              @if ($usuarios->rol == 'Supervisor')
              <option selected>Supervisor</option>
              @else
              <option>Supervisor</option>
              @endif
              @if ($usuarios->rol == 'Encargado')
              <option selected>Encargado</option>
              @else
              <option>Encargado</option>
              @endif
              @if ($usuarios->rol == 'Contador')
              <option selected>Contador</option>
              @else
              <option>Contador</option>
              @endif
              <option>Cliente</option>
              @if ($usuarios->rol == 'Cliente')
              @else
              <option>Cliente</option>
              @endif

          </select>
      </div>

      <label for="password" class="tituloSeccion">Password del usuario:</label>
      <input id="password" type=password" class="form-control formulario" name="password" value="{{$usuarios->password}}" disabled>
  
    <a href="/Usuarios" class="btn btn-danger">Volver</a>
</form>
@endsection         




