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

</style>  

<form action="/Productos/{{$productos->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleFormControlInput1">Producto</label>
      <input type="text" class="form-control" name="nombre" value="{{$productos->nombre}}">

      <label for="exampleFormControlInput1">Descripción del producto</label>
      <input type="text" class="form-control " name="descripcion" value="{{$productos->descripcion}}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/Productos" class="btn btn-danger">Volver</a>
  </form>

@endsection

