@extends('layouts.general')

@section('content')

<form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Mostrar categoría</label>
      <input type="text" class="form-control" value="{{$categoria  }}" disabled>
    </div>
    <a href="/Categorias" class="btn btn-danger">Volver</a>
  </form>

@endsection

