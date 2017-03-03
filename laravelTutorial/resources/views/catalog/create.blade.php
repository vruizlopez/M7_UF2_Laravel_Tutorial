@extends('layouts.master')
@section('content')
	<h1>Añadir Pelicula</h1>
	<form action="{{url('catalog/postCreate')}}" method="POST">
	    {{method_field('PUT')}}
	    {{ csrf_field() }}
	    <div>
		    <label>Título</label><br>
		    <input type="text" name="title">
	    </div>
	    <div>
		    <label>Año</label><br>
		    <input type="text" name="year">
	    </div>
	    <div>
		    <label>Director</label><br>
		    <input type="text" name="director">
	    </div>
	    <div>
		    <label>Poster</label><br>
		    <input type="text" name="poster">
	    </div>
	    <div>
		    <label>Resumen</label><br>
		    <input type="textarea" name="synopsis">
	    </div><br>
	    <input type="submit" value="Añadir pelicula" class="btn btn-primary">
	</form>
@stop