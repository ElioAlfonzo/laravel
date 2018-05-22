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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nombre/{nombre}/apellido/{lastname}', function($nombre, $lastname='Alfonzo'){ //Asi imprime el nombre q le pasamos por la url
    return "Hola Como estas, Sr ". $nombre." " .$lastname;
});

Route::get('/Hola', function(){
    return "Hola Mundo";
});


Route::get('prueba/{name}', 'PruebaController@prueba');

Route::resource('trainers','TrainerController');


