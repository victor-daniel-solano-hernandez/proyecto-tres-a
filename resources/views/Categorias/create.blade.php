@extends('layouts.general')

@section('content')

<form action="/Categorias" method="POST">
    @csrf      
      <label for="" class="tituloSeccion">Nombre de la sección:</label>
      <input type="text" class="form-control formulario" name="nombre">

      <label for="" class="tituloSeccion">Descripción de la sección:</label>
      <input type="text" class="form-control formulario" name="descripcion">
    </div>
  
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection         



