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

<<<<<<< HEAD
Route::get('/', function () {
    return view('home');
});
=======
//Route::get('/', function () {
  //  return view('welcome');
//});
>>>>>>> 091c6bba22fc870b6a6b2c1b02dc7972796d0fc8


//Route::get("/anything","postcontroller@create");

//Route::get("/form","postcontroller@store"); 


//Route::get("/post/{id}","postcontroller@index");

Route::resource("posts","postcontroller");

Route::get("/contact/{id}","postcontroller@contact");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
