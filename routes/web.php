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
	if(Auth::check()){
		if(Auth::user()->isBusiness)
			return redirect('/business');
		else if(Auth::user()->isCustomer) 
			return redirect('/customer');
	}

	return redirect('/login');
});

Route::get('/home', function(){	
	if(Auth::check() && \Auth::user()->isBusiness)
		return view('business.index');

	return redirect('/');
});

Route::get('/logout', 'LoginController@logout');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');