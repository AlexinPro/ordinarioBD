@extends('layout')

@section('title', 'Crear Empleado')

@section('body')
    <h1>Añadir Empleado</h1>
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
            <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
            <input type="text" name="telefono" class="form-control" placeholder="Teléfono" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
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

        <button type="submit" class="btn btn-success">Agregar empleado</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
