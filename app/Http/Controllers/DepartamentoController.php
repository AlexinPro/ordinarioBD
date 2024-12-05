<?php

namespace App\Http\Controllers;

use App\Models\Departamentos;
use App\Models\Puesto;
use App\Models\Puestos;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class DepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = Departamentos::with('puesto')->get();
        return view('Departamentos.index',compact('departamentos'));
    }

    public function create()
    {
        $puestos = Puestos::all(); 
        return view('departamentos.create', compact('puestos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'departamento' => 'required|string|max:255',
            'puesto_id' => 'required|exists:puestos,id',
        ]);
    
        Departamentos::create([
            'departamento' => $request->departamento,
            'puesto_id' => $request->puesto_id,
        ]);
    
        return redirect()->route('departamentos.index')->with('success', 'Departamento creado correctamente.');
    }

    public function show($id)
    {
        
    }

    public function update(Request $request, $id)
    {
       
    $request->validate([
        'departamento' => 'required|string|max:255',
        'puesto_id' => 'required|exists:puestos,id',
    ]);

    $departamentos = Departamentos::findOrFail($id);
    $departamentos->update([
        'departamento' => $request->departamento,
        'puesto_id' => $request->puesto_id,
    ]);

    return redirect()->route('departamentos.index')->with('success', 'Departamento actualizado correctamente.');
    }


    public function destroy($id)
    {
        try {
            $departamentos = Departamentos::findOrFail($id);
            $departamentos->delete();
            return redirect()->route('departamentos.index')->with('success', 'Departamento eliminado correctamente.');
        } catch (QueryException $e) {
            return redirect()->route('departamentos.index')->with('error', 'No se puede eliminar el departamento porque tiene registros asociados.');
        }
    }

    public function edit($id)
    {
    $departamentos = Departamentos::findOrFail($id);
    $puestos = Puestos::all();
    return view('departamentos.edit', compact('departamentos', 'puestos'));
    }
    


}
