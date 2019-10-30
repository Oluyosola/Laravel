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

// Route::get('/', function () {
//     // return view('welcome');
//     return 'hello world';
// });
Route::get('/', 'PagesController@index') ;
Route::get('/services', 'PagesController@services') ;
Route::get('/about', 'PagesController@about') ;
Route::get('/make', 'PostController@insert');
Route::get('/select', 'PostController@retrieve');
Route::get('/theName', 'PostController@getDetails');
Route::get('/change', 'PostController@doUpdate');
Route::get('/dele', 'PostController@del');
Route::resource('Post', 'ResourceController');
// Route::get('/about', function () {
    // return view ('pages.services');
    //  return '<h1>HELLO WORLD</h2>';
    

// });
// route::get('/user/{id}/{name}', function($id,$name){
//     return 'The user is '.$name. 'with an id of' .$id;
// });
 

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/mypost', 'UserController@index');

