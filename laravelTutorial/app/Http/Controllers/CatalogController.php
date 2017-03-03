<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{
	public function getIndex()
	{
		$arrayPeliculas = Movie::all();	
	    //return view('catalog.index', array("arrayPeliculas"=>$this->arrayPeliculas));
	    return view('catalog.index', array("arrayPeliculas"=>$arrayPeliculas));
	}	
	public function getShow($id)
	{
		$Pelicula = Movie::findOrFail($id);	
	    //return view('catalog.show', array("Pelicula"=>$this->arrayPeliculas[$id],"id"=>$id));
	    return view('catalog.show',array('Pelicula'=>$Pelicula));

	}
	public function postCreate(Request $request)
	{
	$movie = new Movie();
        if ($request-> has("title") && $request-> has("year") && $request-> has("director") && $request-> has("poster") && $request-> has("synopsis"))
        {
            $movie->title = $request->input("title");
            $movie->year = $request->input("year");
            $movie->director = $request->input("director");
            $movie->poster = $request->input("poster");
            $movie->synopsis = $request->input("synopsis");
            $movie->rented = false;
            $movie->save();
            return "Creado correctamente";
        }else
        return "Creado incorrectamente";
    }
    public function postEdit(Request $request, $id)
    {
        $movie = Movie::find($id);
        if( $request->has("title") && $request->has("year") && $request->has("director") && $request->has("poster") && $request->has("synopsis"))
         {
            $movie->title = $request->input("title");
            $movie->year = $request->input("year");
            $movie->director = $request->input("director");
            $movie->poster = $request->input("poster");
            $movie->synopsis = $request->input("synopsis");
            $movie->rented = false;
            if( $request->has("rented") )
                $movie->rented = true;
            $movie->save();
            return "Actualizado correctamente";
        } else
            return "Faltan datos para poder ser actualizado";
    }

}
