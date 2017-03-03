<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('/', function () {
    #return view('welcome');
	return view('home');
});

Route::get('login', function () {
    return view('auth.login');
});
Route::get('logout', function () {
    return 'Logout usuario';
});
Route::get('catalog', function () {
	return view('catalog.index');
});
Route::get('catalog/show/{id}', function ($id) {
    return view('catalog.show',array('$id'));
});
Route::get('catalog/create', function () {
    return view('catalog.create');
});
Route::get('catalog/edit/{id}', function ($id) {
    return view('catalog.edit',array('$id'));
});
*/
Route::get('/','HomeController@getHome');
Route::group(['middleware'=>'auth'], function(){
	Route::get('catalog','CatalogController@getIndex');
	Route::get('catalog/show/{id}','CatalogController@getShow');
	Route::get('catalog/create','CatalogController@getCreate');
	Route::get('catalog/edit/{id}','CatalogController@getEdit');
	Route::put('catalog/postCreate','CatalogController@postCreate');
	Route::put('catalog/postEdit/{id}','CatalogController@postEdit');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
