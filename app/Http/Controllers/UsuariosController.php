<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request){
        $valores = $request->all();
        if ($valores['password']!=$valores['password2'])
            return redirect()->back()->with('error', 'El password no esta bien confirmado');
        $imagen = $request->file('imagen');
        $ruta_destino = public_path('fotos/');
        //$nombre_de_archivo = $imagen->getClientOriginalName();
        //$imagen->move($ruta_destino);
        //$valores['imagen']= $nombre_de_archivo;
        $valores['password']=Hash::make($valores['password']);
        $registro = new Usuario();
        $registro->fill($valores);
        $registro->save();
        return redirect("Usuarios" )->with('mensaje', 'Usuario agregado correctamente');    
    }

    public function show($id){
        $usuarios= Usuario::find($id);
        return view('usuarios.show', compact('usuarios'));
    }

    public function update(Request $request, $id){
        $valores=$request->all();
        if($valores['password']!=$valores['password2'])
        return redirect("Usuarios" )->back()->with('error', 'El password no esta bien confirmado');

            if(is_null($valores['password']))
                unset($valores['password']);
            else
            $valores['password']=Hash::make($valores['password']);

            $imagen=$request->file('imagen');
            if(!is_null($imagen)){
                $ruta_destino = public_path('fotos/');
                $imagen->move($ruta_destino);
                $registro =Usuario::find($id);
                $registro->fill($valores);
                $registro->save();
                return redirect("Usuarios" )->back()->with('mensaje', 'Usuario agregado correctamente');
            }    
        }

        public function edit($id){
            $usuarios= Usuario::find($id);
            return view('usuarios.edit', compact('usuarios'));
            
        }

        public function destroy($id){
            try{
                $registro = Usuario::find($id);
                $registro->delete();

                return redirect("Usuarios")->with('mensaje', 'Usuario eliminado correctamente');
            }catch(\Illuminate\Database\QueryException $e){
                return redirect("Usuarios")->with('error', $e->getMessage());
            }
        }
}