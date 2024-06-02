<?php

namespace App\Http\Controllers;

use App\Models\TipoEquipo;
use Illuminate\Http\Request;

class TipoEquipoController extends Controller
{
    public function index()
    {
        $tipos_equipos = TipoEquipo::all();
        return view('tipos_equipos.index', compact('tipos_equipos'));
    }

    public function create()
    {
        return view('tipos_equipos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        TipoEquipo::create($request->only('nombre'));

        return redirect()->route('tipos_equipos.index');
    }

    public function show(TipoEquipo $tipos_equipo)
    {
        return view('tipos_equipos.show', compact('tipos_equipo'));
    }

    public function edit(TipoEquipo $tipos_equipo)
    {
        return view('tipos_equipos.edit', compact('tipos_equipo'));
    }

    public function update(Request $request, TipoEquipo $tipos_equipo)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $tipos_equipo->update($request->only('nombre'));

        return redirect()->route('tipos_equipos.index');
    }

    public function destroy(TipoEquipo $tipos_equipo)
    {
        $tipos_equipo->delete();

        return redirect()->route('tipos_equipos.index');
    }
}
