@extends('layout')

@section('title', 'Editar Puesto')

@section('body')
    <h1>Editar Puesto</h1>
    <form action="{{ route('puestos.update', $puestos->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
            <input type="text" name="puesto" class="form-control" placeholder="Nombre del Puesto" value="{{ $puestos->nombre }}" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
            <textarea name="descripcion" class="form-control" placeholder="Descripción" rows="3" required>{{ $puestos->descripcion }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('puestos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
