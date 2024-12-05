@extends('layout')

@section('title', 'Crear Puesto')

@section('body')
    <h1>Agregar puesto</h1>
    <form action="{{ route('puestos.store') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
            <input type="text" name="puesto" class="form-control" placeholder="Nombre del puesto" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
            <textarea name="descripcion" class="form-control" placeholder="Descripción" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Añadir puesto</button>
        <a href="{{ route('puestos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
