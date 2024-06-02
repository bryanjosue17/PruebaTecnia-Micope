<?php
namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\EstadoServicio;
use App\Models\Cliente;
use App\Models\Equipo;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::with(['estado', 'cliente', 'equipo'])->get();
        return view('servicios.index', compact('servicios'));
    }

    public function create()
    {
        $estado_servicios = EstadoServicio::all();
        $clientes = Cliente::all();
        $equipos = Equipo::all();
        return view('servicios.create', compact('estado_servicios', 'clientes', 'equipos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha_recepcion' => 'required|date',
            'id_estado' => 'required|exists:estado_servicios,id',
            'diagnostico' => 'nullable|string',
            'solucion' => 'nullable|string',
            'id_cliente' => 'required|exists:clientes,id',
            'id_equipo' => 'required|exists:equipos,id',
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
        return view('servicios.edit', compact('servicio', 'estado_servicios', 'clientes', 'equipos'));
    }

    public function update(Request $request, Servicio $servicio)
    {
        $request->validate([
            'fecha_recepcion' => 'required|date',
            'id_estado' => 'required|exists:estado_servicios,id',
            'diagnostico' => 'nullable|string',
            'solucion' => 'nullable|string',
            'id_cliente' => 'required|exists:clientes,id',
            'id_equipo' => 'required|exists:equipos,id',
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
