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

Route::get('/Hello', function () {
   echo "hello world";
});

Route::get('/post/{nrp}/{name}', function ($nrp,$name) {
    return "hello". $name . $nrp;
})->where('name', '[A-Za-z]+') ->where('nrp', '[0-9]+');
   
Route::get('person','PersonController@index');

Route::get('/person/show/{param}','PersonController@show');

Route::resource('Student','StudentController');