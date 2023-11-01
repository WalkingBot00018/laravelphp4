<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuarios::all(); // Obtiene todos los usuarios
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.crear');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate(Usuarios::$rules);

        // Crea un nuevo usuario
        Usuarios::create($request->all());

        return redirect('/usuarios')->with('success', 'Usuario creado correctamente');
    }

    public function show($id)
    {
        $usuario = Usuarios::find($id);
        return view('usuarios.mostrar', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = Usuarios::find($id);
        return view('usuarios.editar', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate(Usuarios::$rules);

        // Actualiza el usuario
        Usuarios::where('id', $id)->update($request->except('_token', '_method'));

        return redirect('/usuarios')->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy($id)
    {
        // Elimina el usuario
        // Usuarios::where('id', $id)->delete();
        // $usuario = Usuarios::find($id);
        
        // $usuario->delete();

        // return redirect('/usuario')->with('success', 'Usuario eliminado correctamente');

        $usuario = Usuarios::find($id);
        $usuario->delete(); 
        return redirect('/usuarios')->with('success', 'Usuario eliminado correctamente');
        // return redirect()->route('/index');
        // redirect()->back()->with('success', 'pais Eliminado ');
    }
}
