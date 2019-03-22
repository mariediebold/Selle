<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Use Illuminate\Http\Request;
Use App\Article;


Route::get('/', function () {
    return view('welcome');

});



Route::get('start', function () {
    return response()->json("hello world",200);
});


//CRUD Article:
Route::get('articles', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{article}', 'ArticleController@update');
Route::delete('articles/{article}', 'ArticleController@delete');


Route::get('/', 'WelcomeController@index');