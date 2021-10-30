<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::view('/','welcome')->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
return view('dashboard');
})->name('dashboard');

Route::get('/tecnicos','UserController@index')->name('tecnico.index');
Route::get('/tecnicos/create','UserController@create')->name('tecnico.create');
Route::get('/tecnicos/{user}/tecnico.edit','UserController@edit')->name('tecnico.edit');
Route::put('/tecnicos/{user}','UserController@update')->name('tecnico.update');
Route::post('/tecnicos','UserController@store')->name('tecnico.store');
Route::get('/historical','HistoricalController@show')->name('historical.show');
Route::get('tecnicos/{user}','UserController@category')->name('tecnico.category');
Route::put('/tecnicos/{user}','UserController@category_update')->name('tecnico.category_update');

Route::resource('categories',CategoryController::class)->names('categories');

Route::view('/life_insurances','life_insurances')->name('life_insurances');
Route::view('/quotes','quotes')->name('quotes');


