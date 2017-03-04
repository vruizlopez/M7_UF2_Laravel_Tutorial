<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class CatalogController extends Controller
{
    public function getIndex(){
        $arrayPeliculas = Movie::all();
        //$arrayPeliculas = $this->ArrayPeliculas;
    	return view('catalog.index', array("arrayPeliculas"=>$arrayPeliculas));
    }
    public function getShow($id){
        //return view('catalog.show', array("Peliculas"=>$this->arrayPeliculas[$id]),
        //array('id'=>$id));
        $Pelicula = Movie::find($id);
    	return view('catalog.show',array('Pelicula'=>$Pelicula));
    }
    public function getCreate(){
    	return view('catalog.create');
    }
    public function getEdit($id){
        //return view('catalog.edit', array('id'=>$id));
        $Pelicula = Movie::findOrFail($id);
    	return view('catalog.edit',array('Pelicula'=>$Pelicula, 'id'=>$id));
    }
    public function postCreate(Request $request){
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
            return "Pelicula creada con éxito";
        }else
        return "No se ha podido crear la Pelicula, revise los campos*";
    }
    public function postEdit(Request $request, $id){
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
            return "Pelicula actualizada correctamente";
        } else
            return "No se ha podido actualizar la Pelicula, revise los campos*";
    }
}
