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

Route::get('testimonials', function(){
    return view('testimonials');
});

Route::get('api/testimonials', function(){
    $testimonials = collect();

    $users = \App\User::limit(10)->get();

    foreach($users as $user)
    {
//        $usr = factory('App\User')->create();

        $t['id'] = $user->id;
        $t['name'] = $user->username;
        $t['image'] = 'https://placeimg.com/640/480/any?' . $user->id;
        $t['email'] = $user->email;

        $testimonials->push($t);
    }

    return $testimonials->toJson();

});

Route::resource('projects', 'ProjectsController');

