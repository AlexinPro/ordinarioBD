@extends('layout')

@section('tittle', 'Lista de Departamentos')

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
        <h1 class="h3">Departamentos</h1>
        <a href="{{ route('departamentos.create') }}" class="btn btn-success">
            <i class="fa-solid fa-plus"></i> Añadir
        </a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th>#</th>
                        <th>Departamento</th>
                        <th>Puesto</th>
                        <th>Editar</th>
                        <th>ELiminar</th>
                    </thead>
                    <tbody>
                        @foreach($departamentos as $d => $row)
                        <tr>
                            <td>{{ $d + 1 }}</td>
                            <td>{{ $row->departamento }}</td>
                            <td>{{ optional($row->puesto)->puesto }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('departamentos.edit', $row->id) }}">
                                    <i class="fa-solid fa-building"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('departamentos.destroy', $row->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este departamento?')">
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
