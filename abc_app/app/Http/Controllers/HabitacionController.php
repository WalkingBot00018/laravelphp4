<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;
class HabitacionController extends Controller
{
    public function index()
    {
        $habitaciones = Habitacion::all(); // Obtiene todas las habitaciones
        return view('habitacion.index', compact('habitaciones'));
    }

    public function create()
    {
        return view('habitacion.crear');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate(Habitacion::$rules);

        // Crea una nueva habitación
        Habitacion::create($request->all());

        return redirect('/habitacion')->with('success', 'Habitación creada correctamente');
    }

    public function show($nro_habitacion)
    {
        $habitacion = Habitacion::find($nro_habitacion);
        return view('habitacion.mostrar', compact('habitacion'));
    }

    public function edit($nro_habitacion)
    {
        $habitaciones = Habitacion::find($nro_habitacion);
        return view('habitacion.editar', compact('habitaciones'));
    }

    public function update(Request $request, $nro_habitacion)
    {
        // Validación de datos
        $request->validate(Habitacion::$rules);

        // Actualiza la habitación
        Habitacion::where('nro_habiatcion', $nro_habitacion)->update($request->except('_token', '_method'));

        return redirect('/habitacion')->with('success', 'Habitación actualizada correctamente');
    }

    public function destroy($nro_habitacion)
    {
        // Elimina la habitación
        Habitacion::where('nro_habitacion', $nro_habitacion)->delete();

        return redirect('/habitacion')->with('success', 'Habitación eliminada correctamente');
    }
}
