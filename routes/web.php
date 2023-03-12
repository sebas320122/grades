<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('curso', 'App\Http\Controllers\CursoController');
Route::get('curso', 'App\Http\Controllers\CursoController@index')->name('curso.index'); 
Route::get('curso/{id_curso}', 'App\Http\Controllers\CursoController@show')->name('act.show'); 

Route::resource('act', 'App\Http\Controllers\ActController');


Route::get('act', 'App\Http\Controllers\ActController@index')->name('act.index'); 
Route::post('act', 'App\Http\Controllers\ActController@store')->name('act.store'); 
Route::post('act/create', 'App\Http\Controllers\ActController@create')->name('act.create'); 
Route::get('act/{id_act}', 'App\Http\Controllers\ActController@show')->name('act.show'); 
Route::patch('act/{id_act}', 'App\Http\Controllers\ActController@update')->name('act.update'); 
Route::delete('act/{id_act}', 'App\Http\Controllers\ActController@destroy')->name('act.destroy'); 
Route::get('act/{id_act}/edit', 'App\Http\Controllers\ActController@edit')->name('act.edit'); 