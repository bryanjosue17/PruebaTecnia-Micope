<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Marca;
use App\Models\TipoEquipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::with(['marca', 'tipoEquipo'])->get();
        return view('equipos.index', compact('equipos'));
    }

    public function create()
    {
        $marcas = Marca::all();
        $tipos_equipos = TipoEquipo::all();
        return view('equipos.create', compact('marcas', 'tipos_equipos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required|string|max:255',
            'numero_serie' => 'nullable|string|max:255',
            'descripcion_problema' => 'nullable|string',
            'id_marca' => 'required|exists:marcas,id',
            'id_tipo_equipo' => 'required|exists:tipos_equipos,id',
        ]);

        Equipo::create($request->all());
        return redirect()->route('equipos.index')->with('success', 'Equipo creado exitosamente.');
    }

    public function show(Equipo $equipo)
    {
        $marcas = Marca::all();
        $tipos_equipos = TipoEquipo::all();
        return view('equipos.show', compact('equipo', 'marcas', 'tipos_equipos'));
    }

    public function edit(Equipo $equipo)
    {
        $marcas = Marca::all();
        $tipos_equipos = TipoEquipo::all();
        return view('equipos.edit', compact('equipo', 'marcas', 'tipos_equipos'));
    }

    public function update(Request $request, Equipo $equipo)
    {
        $request->validate([
            'modelo' => 'required|string|max:255',
            'numero_serie' => 'nullable|string|max:255',
            'descripcion_problema' => 'nullable|string',
            'id_marca' => 'required|exists:marcas,id',
            'id_tipo_equipo' => 'required|exists:tipos_equipos,id',
        ]);

        $equipo->update($request->all());
        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado exitosamente.');
    }

    public function destroy(Equipo $equipo)
    {
        $equipo->delete();
        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado exitosamente.');
    }
}
