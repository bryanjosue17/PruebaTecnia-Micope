<?php

namespace App\Http\Controllers;

use App\Models\Pieza;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class PiezaController extends Controller
{
    public function index()
    {
        $piezas = Pieza::all();
        return view('piezas.index', compact('piezas'));
    }

    public function create()
    {
        $proveedores = Proveedor::all();
        return view('piezas.create', compact('proveedores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'cantidad_disponible' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
            'id_proveedor' => 'required|exists:proveedores,id',
        ]);

        Pieza::create($request->only('nombre', 'descripcion', 'cantidad_disponible', 'precio', 'id_proveedor'));

        return redirect()->route('piezas.index');
    }

    public function show(Pieza $pieza)
    {
        return view('piezas.show', compact('pieza'));
    }

    public function edit(Pieza $pieza)
    {
        $proveedores = Proveedor::all();
        return view('piezas.edit', compact('pieza', 'proveedores'));
    }

    public function update(Request $request, Pieza $pieza)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'cantidad_disponible' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
            'id_proveedor' => 'required|exists:proveedores,id',
        ]);

        $pieza->update($request->only('nombre', 'descripcion', 'cantidad_disponible', 'precio', 'id_proveedor'));

        return redirect()->route('piezas.index');
    }

    public function destroy(Pieza $pieza)
    {
        $pieza->delete();

        return redirect()->route('piezas.index');
    }
}
