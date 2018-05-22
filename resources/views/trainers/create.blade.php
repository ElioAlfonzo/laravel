

@extends('layouts.app') <!--Heredamos todo lo que tiene la vista app| Lo primero q se hace-->

@section('title','Trainers Create')<!--Rellenamos en el espacio title el nombre Trainers Create-->


@section('content'){{-- Section se usa para establece un bloque de contenido --}}

    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data"> {{--Para a subida de archivo la clase enctype--}}
        @csrf {{--modulo de proteccion--}}
    
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombre_espacio"  class="form-control">
            </div>

            <div class="form-group">
                    <label for="">Descripcion</label>
                    <input type="text" name="descrip"  class="form-control">
            </div>

            <div class="form-group">
                    <label for="">Avatar</label>
                    <input type="file" name="avatar"  >
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        
    </form>
@endsection
