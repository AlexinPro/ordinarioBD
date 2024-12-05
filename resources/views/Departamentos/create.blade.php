@extends('layout')

@section('title', 'Crear Departamento')

@section('body')
    <h1>Añadir departamento</h1>
    <form action="{{ route('departamentos.store') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
            <input type="text" name="departamento" class="form-control" placeholder="Nombre del Departamento" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
            <select name="puesto_id" class="form-control" required>
                <option value="">Seleccione un puesto</option>
                @foreach($puestos as $puesto)
                    <option value="{{ $puesto->id }}">{{ $puesto->puesto }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Añadir departamento</button>
        <a href="{{ route('departamentos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
