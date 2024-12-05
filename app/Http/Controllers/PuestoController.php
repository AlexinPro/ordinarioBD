<?php

namespace App\Http\Controllers;

use App\Models\Puestos;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class PuestoController extends Controller
{
    public function index()
    {
        $puestos = Puestos::all();
        return view('Puestos.index',compact('puestos'));
    }

    public function create()
    {
        return view('puestos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'puesto' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
        ]);
    
        Puestos::create([
            'puesto' => $request->puesto,
            'descripcion' => $request->descripcion,
        ]);
    
        return redirect()->route('puestos.index')->with('success', 'Puesto creado correctamente.');
    }

    public function show(Puestos $puestos)
    {
        //
    }

    public function edit($id)
    {
        $puestos = Puestos::findOrFail($id);
        return view('puestos.edit', compact('puestos'));
    }

    public function update(Request $request, Puestos $puestos, $id)
    {
        $request->validate([
            'puesto' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
        ]);
    
        $puestos = Puestos::findOrFail($id);
        $puestos->update([
            'puesto' => $request->puesto,
            'descripcion' => $request->descripcion,
        ]);
    
        return redirect()->route('puestos.index')->with('success', 'Puesto actualizado correctamente');
    }

    public function destroy($id)
    {
        try {
            $puestos = Puestos::findOrFail($id);
            $puestos->delete();
            return redirect()->route('puestos.index')->with('success', 'puesto eliminado correctamente');
        } catch (QueryException $e) {
            return redirect()->route('puestos.index')->with('error', 'No se puede eliminar el departamento porque tiene registros asociados:(');
        }
    }
}
