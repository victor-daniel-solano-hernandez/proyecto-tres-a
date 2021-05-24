<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\Models\Categoria;

class CategoriasController extends Controller
{   
    public function index()
    {
        $categorias = Categoria::all();
        return view('Categorias.index', compact('categorias'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('Categorias.create');
    }

    public function store(Request $request)
    {
     /*   $seccion = $request->input('seccion'); 
        Categoria::agregar($seccion);*/
        $categoria = new Categoria();
        $categoria->nombre=$request->input('nombre');
        $categoria->descripcion=$request->input('descripcion');
        $categoria->imagen= "";
        $categoria->activa = 1;
        $categoria->save();
        return redirect('/Categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $categoria = Categoria::find($id);
        return view('Categorias.show', compact('categoria'));
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('Categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->imagen = "";
        $categoria->activa = 1;

        $categoria->save();
        return redirect('/Categorias');
    }

    public function destroy($id)
    {
        Categoria::destroy($id);
        return redirect('/Categorias');
        //Categoria::eliminar($id);
    }

}

