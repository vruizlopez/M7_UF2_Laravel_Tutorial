@extends('layouts.master')
@section('content')
<div class="row">

    <div class="col-sm-4">
            <img src="{{$Pelicula->poster}}" style="max-width:100%" />

    </div>
    <div class="col-sm-8">

        <h1>{{$Pelicula->title}}</h1>
        <h2>Año: {{$Pelicula->year}}</h2>
        <h2>Director: {{$Pelicula->director}}</h2>
        <h3><b>Resumen </b>{{$Pelicula->synopsis}}</h3>
        @if($Pelicula->rented):
            <p><b>Estado:</b> Pelicula actualmente alquilada</p>
            <button type="button" class="btn btn-danger">Devolver Pelicula</button>
        @else:
            <p><b>Estado: </b> Pelicula disponible</p><button type="button" class="btn btn-primary">Llogar Peli</button>
        @endif
        <button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/catalog/edit/{{$Pelicula->id}}'"><span class="glyphicon glyphicon-pencil"></span>Editar pelicula</button>
        <button type="button" class="btn btn-default" onclick="window.history.back()"><span class="glyphicon glyphicon-chevron-left" </span>Volver al listado</button>

    </div>
</div>
@stop