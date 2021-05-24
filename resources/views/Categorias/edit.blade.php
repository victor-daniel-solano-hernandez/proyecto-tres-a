@extends('layouts.general')


@section('content')



<form action="/Categorias/{{$categoria->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleFormControlInput1">Nombre de la seccion</label>
      <input type="text" class="form-control formulario" name="nombre" value="{{$categoria->nombre}}">

      <label for="exampleFormControlInput1">Descripción de la seccion</label>
      <input type="text" class="form-control formulario" name="descripcion" value="{{$categoria->descripcion}}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/Categorias" class="btn btn-danger">Volver</a>
  </form>

@endsection

