

@extends('layouts.app') <!--Heredamos todo lo que tiene la vista app| Lo primero q se hace-->

@section('title',' Trainers')<!--Rellenamos en el espacio title el nombre Trainers Create-->


@section('content'){{-- Section se usa para establece un bloque de contenido --}}
{{-- $trainers es la var q enviamos por param a esta vista --}}

<div class="row">
@foreach($trainers as $trainer)
        <div class="col-sm">
                <div class="card text-center" style="width: 18rem; margin-top:70px; ">

                <img style="height: 100px; width:100px; background-color: #EFEFEF; margin: 20px;" 
                class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}">

                    <div class="card-body">
                    <h5 class="card-title">{{$trainer->name}}</h5>
                    <p class="card-text">{{$trainer->descripcion}}.</p>
                    <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver Mas....</a>
                    </div>
                </div>
        </div>

@endforeach
</div>    

@endsection
