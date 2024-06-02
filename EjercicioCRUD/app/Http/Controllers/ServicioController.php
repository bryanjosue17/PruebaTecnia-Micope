<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\EstadoServicio;
use App\Models\Cliente;
use App\Models\Equipo;
use App\Models\Tecnico; 
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::with(['estado', 'cliente', 'equipo', 'tecnico'])->get();
        return view('servicios.index', compact('servicios'));
    }

    public function create()
    {
        $estado_servicios = EstadoServicio::all();
        $clientes = Cliente::all();
        $equipos = Equipo::all();
        $tecnicos = Tecnico::all(); 
        return view('servicios.create', compact('estado_servicios', 'clientes', 'equipos', 'tecnicos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_estado' => 'required|exists:estado_servicios,id',
            'id_cliente' => 'required|exists:clientes,id',
            'id_equipo' => 'required|exists:equipos,id',            
            'id_tecnico' => 'nullable|exists:tecnicos,id',
            'fecha_recepcion' => 'required|date',
            'diagnostico' => 'nullable|string',
            'solucion' => 'nullable|string',
         
        ]);

        Servicio::create($request->all());
        return redirect()->route('servicios.index')->with('success', 'Servicio creado exitosamente.');
    }

    public function show(Servicio $servicio)
    {
        return view('servicios.show', compact('servicio'));
    }

    public function edit(Servicio $servicio)
    {
        $estado_servicios = EstadoServicio::all();
        $clientes = Cliente::all();
        $equipos = Equipo::all();
        $tecnicos = Tecnico::all(); 
        return view('servicios.edit', compact('servicio', 'estado_servicios', 'clientes', 'equipos', 'tecnicos'));
    }

    public function update(Request $request, Servicio $servicio)
    {
        $request->validate([
            'id_estado' => 'required|exists:estado_servicios,id',
            'id_cliente' => 'required|exists:clientes,id',
            'id_equipo' => 'required|exists:equipos,id',            
            'id_tecnico' => 'nullable|exists:tecnicos,id',
            'fecha_recepcion' => 'required|date',
            'diagnostico' => 'nullable|string',
            'solucion' => 'nullable|string',
        ]);

        $servicio->update($request->all());
        return redirect()->route('servicios.index')->with('success', 'Servicio actualizado exitosamente.');
    }

    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return redirect()->route('servicios.index')->with('success', 'Servicio eliminado exitosamente.');
    }
}
