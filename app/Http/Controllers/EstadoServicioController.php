<?php
namespace App\Http\Controllers;

use App\Models\EstadoServicio;
use Illuminate\Http\Request;

class EstadoServicioController extends Controller
{
    public function index()
    {
        $estado_servicios = EstadoServicio::all();
        return view('estado_servicios.index', compact('estado_servicios'));
    }

    public function create()
    {
        return view('estado_servicios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        EstadoServicio::create($request->all());
        return redirect()->route('estado_servicios.index')->with('success', 'Estado de Servicio creado exitosamente.');
    }

    public function show(EstadoServicio $estado_servicio)
    {
        return view('estado_servicios.show', compact('estado_servicio'));
    }

    public function edit(EstadoServicio $estado_servicio)
    {
        return view('estado_servicios.edit', compact('estado_servicio'));
    }

    public function update(Request $request, EstadoServicio $estado_servicio)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $estado_servicio->update($request->all());
        return redirect()->route('estado_servicios.index')->with('success', 'Estado de Servicio actualizado exitosamente.');
    }

    public function destroy(EstadoServicio $estado_servicio)
    {
        $estado_servicio->delete();
        return redirect()->route('estado_servicios.index')->with('success', 'Estado de Servicio eliminado exitosamente.');
    }
}
