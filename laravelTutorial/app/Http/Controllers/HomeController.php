<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function getHome(){
        //$arrayPeliculas = Movie::all();
        //return view('catalog.index',array('arrayPeliculas'=>$arrayPeliculas));
    return redirect()->action("CatalogController@getIndex");
    }
}
