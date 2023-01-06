<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/', HomeController::class);
//Route::get('/', 'HomeController'); //Veriones anteriores

Route::get('cursos', [CursoController::class, 'index']);
/* Route::get('cursos', 'CursoController@index'); */ //Versiones anteriores.

Route::get('cursos/create', [CursoController::class, 'create']);


route::get('cursos/{curso}', [CursoController::class, 'show']);

/* Route::get('/', function () {
    //return view('welcome');
    return "Welcome to principal page";
}); */

/* Route::get('cursos', function(){
    return "Welcome to courses page";
});

Route::get('cursos/create', function () {
    return "In this page you can create a course";
});


route::get('cursos/{curso}', function($curso){
    return "Bienvenido al curso de : $curso";
}); */

//Unica ruta
/* Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if($categoria){
        return "Welcomo to $curso course, of the category $categoria";
    }else{
        return "Welcom to: $curso course";
    }

}); */


/* Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {
    return "Welcomo to $curso course, of the category $categoria";
});
 */

 Route::any('{url}', function(){
    return back();
})->where('url', '.*');