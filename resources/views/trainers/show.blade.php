

@extends('layouts.app') <!--Heredamos todo lo que tiene la vista app| Lo primero q se hace-->

@section('title',' Trainer')<!--Rellenamos en el espacio title el nombre Trainers Create-->


@section('content'){{-- Section se usa para establece un bloque de contenido --}}
{{-- $trainers es la var q enviamos por param a esta vista --}}


<img style="height: 200px; width:200px; background-color: #EFEFEF; margin: 20px;
"class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}">

<div class="text-center">
        
    <h5 class="card-title">{{$trainer->name}}</h5>
    
<p class="card-text">{{$trainer->descripcion}}</p>
</div>
@endsection
