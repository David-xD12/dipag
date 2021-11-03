<?php


use Illuminate\Support\Facades\Route;


Route::view('/','welcome')->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
return view('dashboard');
})->name('dashboard');

Route::get('/tecnicos','UserController@index')->name('tecnico.index');
Route::get('/tecnicos/create','UserController@create')->name('tecnico.create');
Route::get('tecnicos/{user}/edit','UserController@edit')->name('tecnico.edit');

Route::get('tecnicos/{user}','UserController@category')->name('tecnico.category');
Route::put('/tecnicos/{user}/cambios','UserController@update')->name('tecnico.update');
Route::put('/tecnicos/{user}','UserController@category_update')->name('tecnico.category_update');
Route::post('/tecnicos','UserController@store')->name('tecnico.store');

Route::get('/historical','HistoricalController@show')->name('historical.show');


Route::resource('categories',CategoryController::class)->names('categories');

Route::view('/life_insurances','life_insurances')->name('life_insurances');
Route::view('/quotes','quotes')->name('quotes');


