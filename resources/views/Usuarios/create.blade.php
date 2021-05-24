@extends('layouts.general')

@section('content')

<form action="/Usuarios" method="POST">
    @csrf      
      <label for="nombre" class="tituloSeccion">Nombre del usuarios:</label>
      <input id="nombre" type="text" class="form-control formulario" name="nombre">

      <label for="a_paterno" class="tituloSeccion">Apellido paterno del usuario:</label>
      <input id="a_paterno" type="text" class="form-control formulario" name="a_paterno">

      <label for="a_materno" class="tituloSeccion">Apellido materno del usuario:</label>
      <input id="a_materno" type="text" class="form-control formulario" name="a_materno">

      <label for="imagen" class="tituloSeccion">Imagen del usuario:</label>
      <input id ="imagen" type="file" class="form-control formulario" name="a_materno">  

      <div class="form-group">
          <label for="rol">Tipo de usuario</label>
          <select name="rol" id="rol">
              <option>Supervisor</option>
              <option>Encargado</option>
              <option>Contador</option>
              <option>Cliente</option>
          </select>
      </div>
      
      <label for="password" class="tituloSeccion">Password del usuario:</label>
      <input id="password" type=password" class="form-control" name="password">

      <label for="password2" class="tituloSeccion">Repita el password</label>
      <input id="password2" type="text" class="form-control" name="password2">
          
    </div>
  
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection         



