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


// admin

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'Admin\DashboardController@index');

    // user
    Route::resource('user', 'Admin\UserController');

    // userType
    Route::resource('userType', 'Admin\UserTypeController');

    // product
    Route::resource('product', 'Admin\ProductController');

    // category
    Route::resource('category', 'CategoryController');
});


Auth::routes();
