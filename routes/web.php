<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'auth'],function () {
    
    /*Route::get('/home', 'HomeController@index')->name('home');*/

   /* Route::get('/estudiantes', 'EstudiantesController@index')->name('estudiantes');*/
    Route::get('estudiantes/create', 'EstudianteController@create')->name('estudiantes.create');
    Route::get('docentes/create', 'DocentesController@create')->name('docentes.create');
    Route::get('matricula/create', 'MatriculaController@create')->name('matricula.create');
    



    /*rutas POST*/ 
    Route::post('estudiantes/create', 'EstudianteController@store')->name('estudiantes.create');
});
