@extends('layout')

@section('title', 'Editar Empleado')

@section('body')
    <h1>Editar Empleado</h1>
    <form action="{{ route('empleados.update', $empleados->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $empleados->nombre }}" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
            <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" value="{{ $empleados->apellidos }}" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
            <input type="text" name="telefono" class="form-control" placeholder="Teléfono" value="{{ $empleados->telefono }}" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" value="{{ $empleados->email }}" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
            <select name="puesto_id" class="form-control" required>
                <option value="">Seleccione un puesto</option>
                @foreach($puestos as $puesto)
                    <option value="{{ $puesto->id }}" {{ $empleados->puesto_id == $puesto->id ? 'selected' : '' }}>
                        {{ $puesto->puesto }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
