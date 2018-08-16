<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/admin/{id}', function($id){


//     return "Duo win number ". $id. " last night";

// });

// Route::get('admin/posts/example', array('as'=>'admin.home', function(){

//  $url = route('admin.home');

//  return "this url is ". $url;

// }));


Route::get('/post/{id}', 'PostsController@index');

Route::get('/getgpa', 'PostsController@getgpa')->name('get.gpa');

Route::post('/calcgpa', 'PostsController@calcGpa')->name('gpa.calc');

Route::get('/enter/courses', 'PostsController@enterCourses')->name('enter.courses');

Route::post('/calc/courses', 'PostsController@calcCourses')->name('calc.courses');


