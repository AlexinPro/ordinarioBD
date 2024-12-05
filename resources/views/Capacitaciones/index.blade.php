@extends('layout')

@section('tittle')
    -Lista
@endsection

@section('body')
<div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Capacitaciones</h1>
        <a href="{{ route('capacitaciones.create') }}" class="btn btn-success">
            <i class="fa-solid fa-plus"></i> Añadir
        </a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Duracion</th>
                        
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach($puestos as $p => $row)
                        <tr>
                            <td>{{ $p + 1 }}</td>
                            <td>{{ $row->puesto }}</td>
                            <td>{{ $row->descripcion}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('puestos.edit', $row->id) }}">
                                    <i class="fa-solid fa-building"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('puestos.destroy', $row->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este departamento?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
