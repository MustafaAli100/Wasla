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
    return view('home');
});
Route::get('/fadwa', function () {
    return view('layouts.app2');
});
Route::get('/pro', function () {
    return view('layouts.app3');
});
Route::get('/homePro', function () {
    return view('programmer.Phome');
});
Route::get('/myprojects', function () {
    return view('programmer.myProjects');
});
Route::get('/showpro', function () {
    return view('programmer.show');
});
Route::get('/editpro', function () {
    return view('programmer.editprogram');
});
Route::get('/ohome', function () {
    return view('owner.Ohome');
});
Route::get('/addproject', function () {
    return view('owner.addProject');
});
Route::get('/show_project', function () {
    return view('owner.show_project');
});
Route::get('/showoffer', function () {
    return view('owner.offers');
});
Route::get('/confirm', function () {
    return view('confirm');
});
Route::get('/ahome', function () {
    return view('admin.Ahome');
});
Route::get('/allprojects', function () {
    return view('admin.allprojects');
});
Route::get('/acceptance', function () {
    return view('admin.acceptance');
});
Route::get('/allusers', function () {
    return view('admin.allusers');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

//Route::get("/anything","postcontroller@create");

//Route::get("/form","postcontroller@store"); 


//Route::get("/post/{id}","postcontroller@index");

Route::resource("posts","postcontroller");

Route::get("/contact/{id}","postcontroller@contact");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
