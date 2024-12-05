<?php

namespace App\Http\Controllers;

use App\Models\Capacitaciones;
use Illuminate\Http\Request;

class CapacitacionController extends Controller
{

    public function index()
    {
        $capacitaciones = Capacitaciones::all();
        return view('Capacitaciones.index',compact('capacitaciones'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Capacitaciones $capacitaciones)
    {
        //
    }

    public function edit(Capacitaciones $capacitaciones)
    {
        //
    }

    public function update(Request $request, Capacitaciones $capacitaciones)
    {
        //
    }

    public function destroy(Capacitaciones $capacitaciones)
    {
        //
    }
}
