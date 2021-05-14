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

Route::get('/', function () {                               //Questa route parte dalla home prende il database in config (ossia, movies.php)
                                                             //la freccia sta ad assegnare il nome films (all'array del db) mentre la function
    return view('home')->with('films', config('movies'));    //config() riporta l'array (fa la stessa cosa del codice commnetato qui sotto)
});

Route::get('/info/{id}', function ($id) {
    $movies = config('movies');                                               //id e' l'index dell'array db
    return view('info')->with('film', $movies[$id]);
})->name('detail');

// Route::get('/info', function () {
//   return view('info');
// });                                                                 //con la freccia function name() assegno un nome(detail) a questa rotta

// Route::get('/', function () {
//     $database = config('movies');
//     return view('home', array('films' => $database));
// });

// Route::get('/movies', function () {
//   $database = config('movies');
//   return view('partials.movies', array('films' => $database));
// });
