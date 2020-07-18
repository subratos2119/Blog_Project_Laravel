<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//User Route

Route::group(['namespace' => 'User'],function(){

	Route::get('/','HomeController@index');
	Route::get('post/{post}','PostController@post')->name('post');

});

//Admin Route

Route::group(['namespace' => 'Admin'],function(){

	Route::get('admin/home', 'HomeController@index')->name('admin.home');
	Route::post('admin/logout', 'HomeController@adminLogout')->name('admin.logout');

	Route::group(['middleware' => 'auth:admin'],function(){
	//User Route
	Route::resource('admin/user','UserController');
	//Role Route
	Route::resource('admin/role','RoleController');
	//Permission Route
	Route::resource('admin/permission','PermissionController');
	//Post Route
	Route::resource('admin/post','PostController');
	//Tag Route
	Route::resource('admin/tag','TagController');
	//Category Route
	Route::resource('admin/category','CategoryController');
	});	


	//Auth Route
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	
	Route::post('admin-login', 'Auth\LoginController@login');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
