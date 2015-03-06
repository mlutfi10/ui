<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    if (Auth::check()) {
		$id = Auth::id();
		$user = new User();
		$data = $user->getdata($id);
        return View::make('home')->with('data',$data);
    } else {
        return View::make('login');
    }
});

Route::post('login','LogController@login');

Route::get('logout','LogController@logout');

Route::get('test/{id}','LogController@test');

Route::get('register',function()
{
	return View::make('register');
});

Route::post('register','LogController@register');

Route::get('newblog',function(){
	return View::make('newblog');							  
});

Route::post('newblog','BlogController@newblog');

Route::get('bloglist','blogController@bloglist');

Route::get('blog/{id}','blogController@blog');

Route::post('comment','blogController@newcomment');