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



// Route::get('/helloworld',function(){
//     return "<h1>Hello world</h1>";
// });

// Route::get('/users/{name}/{id}', function($name, $id){
//     return 'This is user '.$name. ' with an ID of '.$id; 
// });


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function (){
//     return view('pages.about');
// });

// Route::get('/services', function (){
//     return view('pages.services');
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');