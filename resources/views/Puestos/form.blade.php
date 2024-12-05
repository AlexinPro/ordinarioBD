@extends('layout')
@section('title')
     -@yield('formPuesto')
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
                                <input type="text" name="puesto" class="form-control" placeholder="Nombre" required>
                            </div>
                            <div class="input group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-file-lines"></i></span>
                                <input type="text" name="descripcion" class="form-control" placeholder="Puesto" required>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>
@endsection
