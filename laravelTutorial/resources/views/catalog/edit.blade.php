@extends('layouts.master')
@section('content')
    <h1>Modificar pelicula</h1>
    <form action="{{url('catalog/postEdit/')}}/{{$id}}" method="POST">
        {{method_field('PUT')}}
        {{ csrf_field() }}
        <div class="form-group">
        <label>Titulo</label>
        <input type="text" name="title" value="{{$Pelicula->title}}">
        </div>
        <div>
        <label>Año</label>
        <input type="text" name="year" value="{{$Pelicula->year}}">
        </div>
        <div>
        <label>Director</label>
        <input type="text" name="director" value="{{$Pelicula->director}}">
        </div>
        <div>
        <label>Poster</label>
        <input type="text" name="poster" value="{{$Pelicula->poster}}">
        </div>
        <div>
        <label>Resumen</label>
        <input type="textarea" name="synopsis" value="{{$Pelicula->synopsis}}">
        </div>
        <input type="submit" value="Actualizar pelicula" class="btn btn-primary">
    </form>
@stop