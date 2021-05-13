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
    $database = config('movies');
    return view('home', array('films' => $database));
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/movies', function () {
  $database = config('movies');
  return view('partials.movies', array('films' => $database));
});
