<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use App\Models\Puestos;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleados::with('puesto')->get();
        return view('Empleados.index',compact('empleados'));
    }

    public function create()
    {
        $puestos = Puestos::all(); 
        return view('empleados.create', compact('puestos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|min:2|max:30',
            'apellidos' => 'required|string|min:2|max:40',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|max:40',
            'puesto_id' => 'required|exists:puestos,id',
        ]);
    
        Empleados::create($request->all());
    
        return redirect()->route('empleados.index')->with('success', 'Empleado creado:)');
    }

    public function show(Empleados $empleados)
    {
        //
    }

    public function edit($id)
    {
        $empleados = Empleados::findOrFail($id);
        $puestos = Puestos::all(); 
        return view('empleados.edit', compact('empleados', 'puestos'));
    }

    public function update(Request $request, Empleados $empleados, $id)
    {
        $request->validate([
            'nombre' => 'required|string|min:2|max:30',
            'apellidos' => 'required|string|min:2|max:40',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|max:40',
            'puesto_id' => 'required|exists:puestos,id',
        ]);
    
        $empleados = Empleados::findOrFail($id);
        $empleados->update($request->all());
    
        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado');
    }

    public function destroy($id)
    {
        try {
            $empleados = Empleados::findOrFail($id);
            $empleados->delete();
            return redirect()->route('departamentos.index')->with('success', 'Departamento eliminado correctamente.');
        } catch (QueryException $e) {
            return redirect()->route('departamentos.index')->with('error', 'No se puede eliminar el departamento porque tiene registros asociados.');
        }
    }
}
