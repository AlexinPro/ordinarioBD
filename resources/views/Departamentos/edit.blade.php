@extends('layout')

@section('title', 'Editar Departamento')

@section('body')
    <h1>Editar Departamento</h1>
    <form action="{{ route('departamentos.update', $departamentos->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
            <input type="text" name="departamento" class="form-control" placeholder="Nombre del Departamento" 
                   value="{{ $departamentos->departamento }}" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
            <select name="puesto_id" class="form-control" required>
                <option value="">Seleccione un puesto</option>
                @foreach($puestos as $puesto)
                    <option value="{{ $puesto->id }}" 
                        {{ $departamentos->puesto_id == $puesto->id ? 'selected' : '' }}>
                        {{ $puesto->puesto }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('departamentos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
