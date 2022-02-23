<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\CategoryController;

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
})->name("home");

Route::resource('dashboard/post', PostController::class);
Route::resource('dashboard/category', CategoryController::class);



// Route::get('/{nombre}', function ($nombre) {    // Ruta con parametro obligatorio
//     return "Hola $nombre";
// });

 /*Route::get('/hola/{nombre?}', function ($nombre = "Alberto") {    // Ruta con parametro Opcional
    return "Hola $nombre conocenos: <a href='".route("nosotros")."'>nosotros</a>";
 });

Route::get('/sobre-nosotros', function () {    // Ruta con nombre
    return "Toda la informacion sobre nosotros";
})->name("nosotros");                           //Puede ser llamada en otra funcion


Route::get('home/{nombre?}/{apellido?}', function($nombre = "Ramon", $apellido = "Mon") {

    $posts = ["Post1","Post2","Post3","Post4","Post5"];

    $posts2 = [];



   // return view("home")->with("nombre", $nombre)->with("apellido", $apellido); //Pasar variables de la ruta a la vista
    return view("home", ['nombre' => $nombre, 'apellido' => $apellido, 'posts' => $posts, 'posts2' => $posts2 ]); //Clave Valor/ Array

})->name("home");*/

//Route::get('post','PostController@index'); //Llamando al controlador post

