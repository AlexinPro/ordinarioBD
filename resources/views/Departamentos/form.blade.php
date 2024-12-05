@extends('layout')
@section('title')
     -@yield('formDep')
@endsection
@section('body')
     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="car-body">
                        <form @yield('action') method="post" >
                            @yield('method')
                            @csrf
                            <div class="input group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
                                <input type="text" name="departamento" class="form-control" placeholder="Nombre" required>
                            </div>
                            <div class="input group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
                                <input type="text" name="puesto_id" class="form-control" placeholder="Puesto" required>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>
@endsection
