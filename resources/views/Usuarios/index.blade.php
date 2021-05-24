@extends('layouts.general')

@section('breadcumb')
<li class="breadcrumb-item" ><a href="#">Home</a></li>
<li class="breadcrumb-item"><a href="#">Categorias</a></li>
<li class="breadcrumb-item active" aria-current="page">Listar</li>
@endsection

@section('menu')
<li class="dropdown-item"><a href="/tablero">Dashboard</a></li>
<li class="dropdown-item active "><a class="text-warning" href="/Categorias">CATEGORIAS</a></li>
<li class="dropdown-item"><a href="charts.html">Charts</a></li>
<li class="dropdown-item"><a href="elements.html">UI Elements</a></li>
<li><a href="panels.html">Panels</a></li>
<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
    <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
    </a>
    <ul class="children collapse" id="sub-item-1">
        <li><a class="" href="#">
            <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
        </a></li>
        <li><a class="" href="#">
            <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
        </a></li>
        <li><a class="" href="#">
            <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
        </a></li>
    </ul>
</li>
<li><a href="login.html">Logout</a></li>
@endsection



@section('content')

<style>
    th{
        font-size: 20px
    }
    td{
        font-size: 20px

    }
</style>

<a href="Usuarios/create" class="btn btn-light" >Agregar Usuario</a><br>


<table border="1" class="table table-striped">
<thead class="thead-dark">
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Operaciones</th>
</thead>

<tbody>
    @forelse ($usuarios as $usuario)
      <tr>
        <th scope="row">{{$usuario->nombre}}</th>
        <th scope="row">{{$usuario->rol}}</th>
        {{--
            <td>
            <td>{{$usuario->nombre}} {{$usuario->a_paterno}} {{$usuario->a_materno}}</td>
            <td>{{$usuario->rol}}</td>    
        </td>
        --}}
        <td>
            <a href="/Usuarios/{{$usuario->id}}/edit" class="btn btn-success">Editar</a>
            <a href="/Usuarios/{{$usuario->id}}" class="btn btn-warning">Mostrar</a>
            <form action ="/Usuarios/{{$usuario->id}}" method="post" style="display: inline;"
                 onclick="return confirm('¿Desea eliminar ?')">
                    @method('DELETE')
                    @csrf
                <button type="submit" class="btn btn-danger">Eliminar</button>
             </form>
        </td>
      </tr>      
      @empty
          <tr>
            <td colspan="3">
              sin registro
            </td>
          </tr>
      @endforelse    
</tbody> 
</table>

@endsection