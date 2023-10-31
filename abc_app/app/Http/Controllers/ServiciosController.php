<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all(); // Obtiene todos los servicios
        return view('servicios.index', compact('servicios'));
    }

    public function create()
    {
        return view('servicios.crear');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate(Servicio::$rules);

        // Crea un nuevo servicio
        Servicio::create($request->all());

        return redirect('/servicios')->with('success', 'Servicio creado correctamente');
    }

    public function show($id_servicio)
    {
        $servicio = Servicio::find($id_servicio);
        return view('servicios.mostrar', compact('servicio'));
    }

    public function edit($id_servicio)
    {
        $servicio = Servicio::find($id_servicio);
        return view('servicios.editar', compact('servicio'));
    }

    public function update(Request $request, $id_servicio)
    {
        // Validación de datos
        $request->validate(Servicio::$rules);

        // Actualiza el servicio
        Servicio::where('id_servicio', $id_servicio)->update($request->except('_token', '_method'));

        return redirect('/servicios')->with('success', 'Servicio actualizado correctamente');
    }

    public function destroy($id_servicio)
    {
        // Elimina el servicio
        Servicio::where('id_servicio', $id_servicio)->delete();

        return redirect('/servicios')->with('success', 'Servicio eliminado correctamente');
    }
}
