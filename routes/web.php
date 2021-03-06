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


Auth::routes();

Route::get('/', function () {
    	return view('welcome');
	});
Route::get('/product', function(){
		return view('product/index');
	});
Route::get('/category', function(){
		return view('category');
	});

Route::resource('categories', 'CategoryController');
Route::resource('product', 'ProductController');
Route::resource('posts','PostsController');

Route::group(['middleware' => ['web', 'auth']], function(){

	Route::get('/home', function(){
		if (Auth::user()->admin == 0) {
			return view('home');
		}else {
			$users['users'] = \App\User::all();
			return view('adminhome', $users);
		}
	});

	Route::get('/change-password', 'Auth\ChangePasswordController@index')->name('password.change');

	Route::post('/change-password', 'Auth\ChangePasswordController@changepassword')->name('password.update');

});
