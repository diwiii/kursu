<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/hello', function () {
    return 'Hello World';
});


/*
|
| !!! NO VERBS IN URI !!!
|
*/

//Šis ir index
Route::get('/', 'DishesController@index');
// izmantojam GET dishes, lai neizmantotos POST dishes
Route::get('dishes', 'DishesController@index');
Route::post('dishes', 'DishesController@store');

Route::get('dishes/create', 'DishesController@create');

Route::get('dishes/{dish}', 'DishesController@show');
// Rediģēšanas forma ēdiena ierakstam
Route::get('dishes/{dish}/edit', 'DishesController@edit');
// Saglabājam ēdiena ierakstu
Route::put('dishes/{dish}', 'DishesController@update');



