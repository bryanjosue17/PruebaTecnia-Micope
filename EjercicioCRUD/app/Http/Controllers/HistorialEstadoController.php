<?php
namespace App\Http\Controllers;

use App\Models\HistorialEstado;
use App\Models\Servicio;
use App\Models\EstadoServicio;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HistorialEstadoController extends Controller
{
    public function index()
    {
        $historial_estados = HistorialEstado::with(['servicio', 'estado'])->get();
        return view('historial_estados.index', compact('historial_estados'));
    }

    public function create()
    {
        $servicios = Servicio::all();
        $estado_servicios = EstadoServicio::all();
        return view('historial_estados.create', compact('servicios', 'estado_servicios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_servicio' => 'required|exists:servicios,id',
            'id_estado' => 'required|exists:estado_servicios,id',
            'fecha' => 'required|date',
        ]);

        HistorialEstado::create($request->only('id_servicio', 'id_estado', 'fecha'));

        return redirect()->route('historial_estados.index')->with('success', 'Historial de Estado creado exitosamente.');
    }

    public function show(HistorialEstado $historial_estado)
    {
        $historial_estado->fecha = Carbon::parse($historial_estado->fecha)->format('Y-m-d\TH:i');
        $servicios = Servicio::all();
        $estado_servicios = EstadoServicio::all();
        return view('historial_estados.show', compact('historial_estado', 'servicios', 'estado_servicios'));
    }

    public function edit(HistorialEstado $historial_estado)
    {
        $historial_estado->fecha = Carbon::parse($historial_estado->fecha)->format('Y-m-d\TH:i');
        $servicios = Servicio::all();
        $estado_servicios = EstadoServicio::all();
        return view('historial_estados.edit', compact('historial_estado', 'servicios', 'estado_servicios'));
    }

    public function update(Request $request, HistorialEstado $historial_estado)
    {
        $request->validate([
            'id_servicio' => 'required|exists:servicios,id',
            'id_estado' => 'required|exists:estado_servicios,id',
            'fecha' => 'required|date',
        ]);

        $historial_estado->update($request->only('id_servicio', 'id_estado', 'fecha'));

        return redirect()->route('historial_estados.index')->with('success', 'Historial de Estado actualizado exitosamente.');
    }

    public function destroy(HistorialEstado $historial_estado)
    {
        $historial_estado->delete();

        return redirect()->route('historial_estados.index')->with('success', 'Historial de Estado eliminado exitosamente.');
    }
}
