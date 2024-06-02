<?php

namespace App\Http\Controllers;

use App\Models\DetalleReparacion;
use App\Models\Servicio;
use App\Models\Pieza;
use Illuminate\Http\Request;

class DetalleReparacionController extends Controller
{
    public function index()
    {
        $detalles_reparacion = DetalleReparacion::with(['servicio', 'pieza'])->get();
        return view('detalle_reparaciones.index', compact('detalles_reparacion'));
    }

    public function create()
    {
        $servicios = Servicio::all();
        $piezas = Pieza::all();
        return view('detalle_reparaciones.create', compact('servicios', 'piezas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_servicio' => 'required|exists:servicios,id',
            'id_pieza' => 'required|exists:piezas,id',
            'descripcion' => 'required|string',
            'cantidad' => 'required|integer|min:1',
            'costo' => 'required|numeric|min:0',
        ]);

        DetalleReparacion::create($request->all());
        return redirect()->route('detalle_reparaciones.index')->with('success', 'Detalle de Reparación creado exitosamente.');
    }

    public function show(DetalleReparacion $detalle_reparacione)
    {
        $servicios = Servicio::all();
        $piezas = Pieza::all();
        return view('detalle_reparaciones.show', compact('detalle_reparacione', 'servicios', 'piezas'));
    }

    public function edit(DetalleReparacion $detalle_reparacione)
    {
        $servicios = Servicio::all();
        $piezas = Pieza::all();
        return view('detalle_reparaciones.edit', compact('detalle_reparacione', 'servicios', 'piezas'));
    }

    public function update(Request $request, DetalleReparacion $detalle_reparacione)
    {
        $request->validate([
            'id_servicio' => 'required|exists:servicios,id',
            'id_pieza' => 'required|exists:piezas,id',
            'descripcion' => 'required|string',
            'cantidad' => 'required|integer|min:1',
            'costo' => 'required|numeric|min:0',
        ]);

        $detalle_reparacione->update($request->all());
        return redirect()->route('detalle_reparaciones.index')->with('success', 'Detalle de Reparación actualizado exitosamente.');
    }

    public function destroy(DetalleReparacion $detalle_reparacione)
    {
        $detalle_reparacione->delete();
        return redirect()->route('detalle_reparaciones.index')->with('success', 'Detalle de Reparación eliminado exitosamente.');
    }
}
