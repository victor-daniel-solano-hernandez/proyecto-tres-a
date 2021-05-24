@extends('layouts.general')

@section('content')

<form action="/Productos" method="POST">
    @csrf      
      <label for="" class="tituloSeccion">Producto:</label>
      <input type="text" class="form-control " name="nombre">

      <label for="" class="tituloSeccion">Descripción del producto:</label>
      <input type="text" class="form-control " name="descripcion">
    </div>
  
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection         



