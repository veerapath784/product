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

// Route::get('/play' ,function (){

//     return view('showcontact');
// });
// Route::get('fbpage', 'FbpageController@index');
Route::get('/news/{id}', 'NewsController@show');
Route::get('contact', 'ShowcontactController@index');

// admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){

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
        //Facebook
        Route::resource('fb_page', 'Admin\FbpageController');
        //Contact
        Route::resource('contact', 'Admin\ContactController');
         //Logo
        Route::resource('logo', 'Admin\LogoController');
        //product
        Route::resource('product', 'Admin\ProductController');


});


Auth::routes();

Route::get('logout', function(){
    auth()->logout();
    return redirect('/');
});
