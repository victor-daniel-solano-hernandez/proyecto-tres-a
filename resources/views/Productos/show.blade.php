@extends('layouts.general')

@section('content')

<form action="/Productos" method="POST">
    <div class="form-group">
      <label for="exampleFormControlInput1">Mostrar categoría</label>
      <input type="text" class="form-control" value="{{$productos->nombre}}" disabled>
    </div>
    <a href="/Productos" class="btn btn-danger">Volver</a>
  </form>

@endsection

