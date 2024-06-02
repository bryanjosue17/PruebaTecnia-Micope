<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'nullable|string',
            'telefono' => 'nullable|string',
            'email' => 'nullable|string|email|max:255',
        ]);

        Proveedor::create($request->only('nombre', 'direccion', 'telefono', 'email'));

        return redirect()->route('proveedores.index');
    }

    public function show(Proveedor $proveedore)  
    {
        return view('proveedores.show', compact('proveedore'));
    }

    public function edit(Proveedor $proveedore)  
    {
        return view('proveedores.edit', compact('proveedore'));
    }

    public function update(Request $request, Proveedor $proveedore)  
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'nullable|string',
            'telefono' => 'nullable|string',
            'email' => 'nullable|string|email|max:255',
        ]);

        $proveedore->update($request->only('nombre', 'direccion', 'telefono', 'email'));

        return redirect()->route('proveedores.index');
    }

    public function destroy(Proveedor $proveedore)  
    {
        $proveedore->delete();
    
        return redirect()->route('proveedores.index');
    }
    
}
