<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class AutenticarController extends Controller
{
    public function validar(Request $request){
        switch($request->input('usuario')){
            case 'supervisor':
                if($request->input('password') == "supervisor")
                return redirect("/Categorias");
                else return redirect('/autenticar');
            break;   

            case 'cliente':
                if($request->input('password') == "cliente")
                return redirect("/Categorias");
                else return redirect('/autenticar');
            break;
            
            case 'encargado':
                if($request->input('password') == "encargado")
                return redirect("/revisar");
                else return redirect('/autenticar');
            break;    

            default:
            return redirect('/autenticar')->with('error', 'Usuario no agregado');
            break;
         }
        
        /*$nombre  = $request->input('usuario');
        $usuario = Usuario::where('nombre', $nombre)->first();
        
       if(is_null($usuario))
       return redirect('/autenticar')->with('error', 'Usuario no agregado');
       else{
           $password = $request->input('password');
           $password_bd = $usuario->password;
           if(Hash::check($password, $password_bd)){
               Auth::login($usuario);
               return redirect("/Tablero");
           }else
            return redirect('/autenticar')->with('error', 'Usuario no registrado');
       }
    }*/
}

    public function autenticar(){
        return view('autenticar');
    }

    public function salir(){
        Auth::logout();
        return redirect('/');
    }
       
       
    

        /*
            switch($request->input('usuario')){
            case 'supervisor':
                if($request->input('password') == "supervisor")
                return redirect("/Tablero");
                else return redirect('/autenticar');
            break;   

            case 'cliente':
                if($request->input('password') == "cliente")
                return redirect("/Categorias");
                else return redirect('/autenticar');
            break;
            
            case 'encargado':
                if($request->input('password') == "encargado")
                return redirect("/revisar");
                else return redirect('/autenticar');
            break;    

            default:
            return redirect('/autenticar')->with('error', 'Usuario no agregado');
            break;
         }

        */
    
}
