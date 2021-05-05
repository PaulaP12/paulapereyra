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
    return view('welcome');
});

Route::resource('item', 'App\Http\Controllers\ItemController');

/*
Practica de rutas clase 21 de abril

Route::get('db',[UsersController::class, 'index']);

Route::get('cursos', function () {
    return "Bienvenido a la pagina de los cursos";
});

 Route::get('cursos/{curso}', function ($curso) { return "Bienvenido al curso: $curso"; });

Route::get('cursos/{curso}/{categoria}', function ($curso,$categoria) {
    return "Bienvenido al curso: $curso, de la categoria $categoria";
});

Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria = null) { 
    // ? indica que es una variable opcional. En la funcion se define un valor por defecto.
    if ($categoria) {
        return "Bienvenido al curso: $curso, de la categoria $categoria";
    }else{
        return "Bienvenido al curso: $curso (sin categoria).";
    }
});

*/