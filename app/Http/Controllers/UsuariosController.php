<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    /*
    * index para mostrar todos los usuarios
    * store para guardar un usuario
    * update para actualizar un usuario
    * destroy para eliminar un usuario
    * edit para mostrar el formulario de edicion
    */

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|min:3'
        ]);
        $usuario = new Usuario;
        $usuario->nombre = $request->nombre;
        $usuario->save();
       return redirect()->route('acceso')->with('success', 'Usuario insertado correctamente' );
    }
    public function index(){
        $usuarios = Usuario::all();
        return view('paginas.index', ['usuarios' => $usuarios]);
    }
    public function show($id){
        $usuario = Usuario::find($id);
        return view('paginas.show', ['usuario' => $usuario]);
    }
    public function update(Request $request, $id){
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->save();
//dd(); importante! es para hacer un log


       // return view('paginas.index', ['success' => 'Usuario actualizado!']);
       return redirect()->route('acceso')->with('success', 'Usuario actualizado!');
    }
    public function destroy($id){
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect()->route('acceso')->with('success', 'Usuario ha sido borrado!');
    }
}
