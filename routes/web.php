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
Route::get('project', function () {
    return view('project');
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
Route::get('/home_company', function () {
    return view('Company.home');
});
Route::get('/myprojects', function () {
    return view('programmer.myProjects');
});
Route::get('/show_programmer', function () {
    return view('programmer.show');
});
Route::get('/edit_programmer', function () {
    return view('programmer.editprogram');
});
Route::get('/home_owner', function () {
    return view('owner.Ohome');
});
Route::get('/add_project', function () {
    return view('owner.addProject');
});
Route::get('/show_project', function () {
    return view('owner.show_project');
});
Route::get('/show_offer', function () {
    return view('owner.offers');
});
Route::get('/confirm', function () {
    return view('confirm');
});
Route::get('/Trms', function () {
    return view('Trms-of-use-and-privacy');
});
Route::get('/admin_home', function () {
    return view('admin.Ahome');
});
Route::get('/all_projects', function () {
    return view('admin.allprojects');
});
Route::get('/acceptance', function () {
    return view('admin.acceptance');
});
Route::get('/all_users', function () {
    return view('admin.allusers');
});
Route::get('/dashbord', function () {
    return view('admin.dashbord');
});

Route::get('/login_user', function () {
    return view('login');
});
//Route::get("/anything","postcontroller@create");

//Route::get("/form","postcontroller@store"); 


//Route::get("/post/{id}","postcontroller@index");

Route::resource("posts","postcontroller");

Route::get("/contact/{id}","postcontroller@contact");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
