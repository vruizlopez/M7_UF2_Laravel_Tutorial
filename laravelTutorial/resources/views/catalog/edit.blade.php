@extends('layouts.master')
@section('content')
    <h1>Editar Película</h1>
    <form action="{{url('catalog/postEdit/')}}/{{$id}}" method="POST">
        {{method_field('PUT')}}
        {{ csrf_field() }}
        <div class="form-group">
        <label>Titulo</label><br>
        <input type="text" name="title" value="{{$Pelicula->title}}">
        </div>
        <div>
        <label>Año</label><br>
        <input type="text" name="year" value="{{$Pelicula->year}}">
        </div>
        <div>
        <label>Director</label><br>
        <input type="text" name="director" value="{{$Pelicula->director}}">
        </div>
        <div>
        <label>Poster</label><br>
        <input type="text" name="poster" value="{{$Pelicula->poster}}">
        </div>
        <div>
        <label>Resumen</label><br>
        <input type="textarea" name="synopsis" value="{{$Pelicula->synopsis}}">
        </div><br>
        <input type="submit" value="Actualizar Película" class="btn btn-primary">
    </form>
@stop
