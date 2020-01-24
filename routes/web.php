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
    return view('home.home');
});
Route::get('/payments', function () {
    return view('home.payment');
});
Route::get('/makeoffer', function () {
    return view('programmer.makeoffer');
});
Route::get('/editpro', function () {
    return view('programmer.editprogram');
});
// Route::get('/homepage', function () {
//     return view('home.home');
// });
Route::get('project', function () {
    return view('project');
});
Route::get('/fadwa', function () {
    return view('layouts.app2');
});
Route::get('/pro', function () {
    return view('layouts.app3');
});
Route::get('/owner', function () {
    return view('admin.owner');
});
Route::get('/implemented ', function () {
    return view('admin.implemented');
});
Route::get('/during', function () {
    return view('admin.duringimplememtation');
});
Route::get('/programmer', function () {
    return view('admin.programmer');
});
Route::get('/company', function () {
    return view('admin.company');
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


Route::get('/confirm', function () {
    return view('confirm');
});
Route::get('/nav', function () {
    return view('nav');
});
Route::get('/Trms', function () {
    return view('Trms-of-use-and-privacy');
});
Route::get('/admin_home', function () {
    return view('admin.dashbord');
});
Route::get('/all_projects', function () {
    return view('admin.allprojects');
});
Route::get('/all_users', function () {
    return view('admin.allusers');
});


Route::get('/login_user', function () {
    return view('login');
});
Route::get('/off', function () {
    return view('programmer.off');
});
Route::get('/offowner', function () {
    return view('owner.offowner');
});
Route::get('/mak', function () {
    return view('programmer.mak');
});
//Route::get("/anything","postcontroller@create");

//Route::get("/form","postcontroller@store"); 


//Route::get("/post/{id}","postcontroller@index");

Route::resource("posts","postcontroller");

Route::get("/contact/{id}","postcontroller@contact");
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// start of Super admin routes
Route::get("/dashbord","DashController@index");
Route::get("/acceptance","DashController@getAllProjects");
// End of Super admin routes

// start of owner projrct routes
Route::post("/newproject","OwnerController@store");
Route::get('/add_project','OwnerController@create');
Route::get('/home_owner','OwnerController@index')->name('Ownerhome');
Route::get('/showProject/{id}','OwnerController@showProject');
Route::get('/showOffer/{id}','OwnerController@showoffer');
// End of owner projrct routes

// Start of programmer routes
Route::get('/homePro','ProgrammerController@index');
Route::get('/createOffer/{p_id}','ProgrammerController@createOff');
Route::get('/showOffer/{id}','ProgrammerController@showoffer');
//End of programmer routes 

//start of Global routes

Route::post('/offer/{p_id}','GlobalController@storeme');

//End of global routes




