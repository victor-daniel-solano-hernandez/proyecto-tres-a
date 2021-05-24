<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('Productos.index', compact('productos'));
    }
    
    public function create()
    {
        return view('Productos.create');
    }

    public function store(Request $request)
    {
     /*   $seccion = $request->input('seccion'); 
        Categoria::agregar($seccion);*/
        $categoria = new Producto();
        $categoria->nombre=$request->input('nombre');
        $categoria->descripcion=$request->input('descripcion');
        $categoria->imagen= "";
        $categoria->activa = 1;
        $categoria->save();
        return redirect('/Productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $productos = Producto::find($id);
        return view('Productos.show', compact('productos'));
    }

    public function edit($id)
    {
        $productos = Producto::find($id);
        return view('Productos.edit', compact('productos'));
    }

    public function update(Request $request, $id)
    {
        $categoria = Producto::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->imagen = "";
        $categoria->activa = 1;

        $categoria->save();
        return redirect('/Productos');
    }

    public function destroy($id)
    {
        Producto::destroy($id);
        return redirect('/Productos');
        //Categoria::eliminar($id);
    }
}
