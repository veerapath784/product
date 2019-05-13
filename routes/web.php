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
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('homepage');
// });

Route::resource('/', 'HomeController');





// admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/', 'Admin\DashboardController@index');

    // user
    Route::resource('user', 'Admin\UserController');

    // userType
    Route::resource('userType', 'Admin\UserTypeController');

    // product
    Route::resource('product', 'Admin\ProductController');

    // category
    Route::resource('category', 'Admin\CategoryController');

    //Banner
    Route::resource('banner', 'Admin\BannerController');
    //Article
    Route::resource('article', 'Admin\ArticleController');
});


Auth::routes();

Route::get('logout', function(){
    auth()->logout();
    return redirect('/');
});
