@extends('layout')

@section('tittle')
    -Lista
@endsection

@section('body')
@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
<div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">EMPELADOS</h1>
        <a href="{{ route('empleados.create') }}" class="btn btn-success">
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
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>e-mail</th>
                        <th>Puesto</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach($empleados as $e=> $row)
                        <tr>
                            <td>{{ $e + 1 }}</td>
                            <td>{{ $row->nombre }}</td>
                            <td>{{ $row->apellidos}}</td>
                            <td>{{ $row->telefono }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ optional($row->puesto)->puesto }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('empleados.edit', $row->id) }}">
                                    <i class="fa-solid fa-building"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('empleados.destroy', $row->id) }}" method="POST" onsubmit="return confirm('¿Eliminar empleado?')">
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

