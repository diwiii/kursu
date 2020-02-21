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
    return 'Hello! It is me Kuršu krogs.';
});


/*
|
| !!! NO VERBS IN URI !!!
|
*/
/**
 * DishesController
 */
//Šis ir index
Route::get('/', 'DishesController@index')->name('dishes.index');
// izmantojam GET dishes, lai neizmantotos POST dishes
Route::get('dishes', 'DishesController@index');
Route::post('dishes', 'DishesController@store')->middleware('auth');

Route::get('dishes/create', 'DishesController@create')->middleware('auth');

Route::get('dishes/{dish}', 'DishesController@show')->name('dishes.show');
// Rediģēšanas forma ēdiena ierakstam
Route::get('dishes/{dish}/edit', 'DishesController@edit')->name('dishes.edit')->middleware('auth');
// Saglabājam ēdiena ierakstu
Route::put('dishes/{dish}', 'DishesController@update')->middleware('auth');

/**
 * CategoriesController
 */
Route::get('/cat', 'CategoryController@index')->name('category.index');
Route::post('/cat', 'CategoryController@store')->middleware('auth');
Route::get('/cat/create', 'CategoryController@create')->middleware('auth');
Route::get('/cat/{category}/edit', 'CategoryController@edit')->name('category.edit')->middleware('auth');
Route::get('/cat/{category}', 'CategoryController@show')->name('category.show');
Route::put('/cat/{category}', 'CategoryController@update')->name('category.update')->middleware('auth');


/**
 * Authentication routes
 * Disabled routes: register, reset, confirm
 */
Auth::routes([
    'register' => false,
    'reset' => false,
    'confirm' => false
    ]);

Route::get('/home', 'HomeController@index')->name('home');
