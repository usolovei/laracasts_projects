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
    return view('welcome');
});

Route::get('laracasts', function(){
    return view('laracasts');
});

Route::get('custom_inputs', function(){
    return view('custom_inputs');
});

Route::get('scoped_slots', function(){
    return view('scoped_slots');
});

Route::get('carousel', function(){
    return view('carousel');
});

Route::get('faq', function(){
   return view('faq');
});

Route::resource('projects', 'ProjectsController');

